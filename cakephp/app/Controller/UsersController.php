<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('CookieComponent', 'Controller/Component');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class UsersController extends AppController {
	public $uses = ['User'];
	public $components = ['Cookie', 'Auth'];

    public function beforeFilter() {
        parent::beforeFilter();
        // ユーザー自身による登録とログアウトを許可する
        $this->Auth->allow('add', 'logout');
    }

    // ログインアクション
    public function login() {
    	$this->layout = 'fnt';
    	// POSTされたデータを取得する。
    	$postData = $this->request->data;
    	
		// modeの初期化をする。
		$mode = empty($postData['mode'])? null : $postData['mode'];
		// ログインのアクションがおこなわれていればmodeにdoを入れる。
		$mode = ($mode === 'do') ? $mode: 'before';

		// modeがdoであればログイン処理をおこなう
        if($mode === 'before'){
        	$this->render('login');
        } elseif($mode === 'do') {

        	// バリデートチェックをする。
        	$validateRes = $this->User->saveAll($postData, ['validate' => 'only']);

        	if(!$validateRes){
	            $this->Flash->error('ログインIDとパスワードをご確認ください');
        		return;
        	}

        	if($this->Auth->login()){
	            $this->redirect($this->Auth->redirect(['action' => 'view']));
        	}else{
	            $this->Flash->error('ログインIDかパスワードが違います');
        	}
        }
    }

	// ログアウトアクション
    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->findById($id));
    }

    public function add() {
        if ($this->request->data) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success('アカウントが追加されました');
                return $this->redirect([
                	'action' => 'index'
                ]);
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
}
