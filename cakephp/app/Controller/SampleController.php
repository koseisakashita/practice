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
class SampleController extends AppController {
	public $uses = array('info', 'Sample');
	public $components = array('Cookie');

	public function index(){
	$databa =$this->Sample->find('first');
	$databa = empty($databa) ? null : $databa ;
	$this->set('datas',$databa);
	}

	public function add(){
		$this->layout = 'test';

		$opt = [
			'fields' => [
				'*',
			],
			'conditions' => [
				'Sample.id' =>2
			],
			'joins' => [[
				'type' => 'inner',
				
				'alias' => 'info',
				'table' => 'infos',
				'conditions' => [
					'Sample.id = info.samples_id'
				]
			]]
		];

		$databa =$this->Sample->find('all', $opt);

		$this->Session->write('datass','ttttt');
		// pr($this->Session);

		$this->Cookie->write('ddd','ttttt');
		pr($this->Cookie->read('ddd'));

		$this->set('datas',$databa);
		$this->set('header_for_layout','データベースに追加');
		
		if($this->request->is('post')){
			$this->Sample->save($this->request->data);
		}else{
			
		}
	}
}
