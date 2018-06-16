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
class PostsController extends AppController {
	public $uses = ['Post'];
	public $components = ['Cookie', 'Auth'];

    // 投稿一覧ページ
    public function index() {
        // 投稿データを取得する「。
        $posts = [];
        $posts = $this->Post->find('all');
        $this->set('posts', $posts);
    }

    // 投稿詳細ページ
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException();
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException();
        }
        $this->set('post', $post);
    }

    // 投稿追加ページ
    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success('投稿が追加されました。');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('投稿が追加されませんでした。');
        }
    }

    // 投稿編集ページw
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException('投稿記事が見つかりません。');
        }

        // 投稿のデータを取得する。
        $post = $this->Post->find('first',[
            'conditions' => $id
        ]);

        // 投稿のデータが見つからなければエラーを投げる。
        if (!$post) {
            throw new NotFoundException('投稿記事が見つかりません。');
        }

        if ($this->request->is(['post', 'put'])) {
            $this->Post->id = $id;

            // 
            $saveRes = $this->Post->save($this->request->data);

            if ($saveRes) {
                $this->Flash->success('記事が更新されました。');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('記事を更新できませんでした。');
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    // 投稿削除アクショ
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Post->delete($id)) {
            $this->Flash->success('投稿が削除されました。');
        } else {
            $this->Flash->error('投稿の削除に失敗しました。');
        }

        return $this->redirect(['action' => 'index']);
    }

}
