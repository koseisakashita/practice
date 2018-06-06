<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppModel', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class User extends AppModel {
    public $login_validate = [
        'username' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => '何か入力してください。'
            ]
        ],
        'password' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => '何か入力してください。'
            ],
            'between' => [
                'rule' => ['lengthBetween', 8, 20],
                'message' => '8文字以上20文字以内で入力してください。'
            ]
        ],
        'role' => [
            'valid' => [
                'rule' => [
                    'inList',[
                        'admin', 'author'
                    ]
                ],
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            ]
        ]
    ];

    public $user_add_validate = [
        'username' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => '何か入力してください。'
            ],
            'maxLength' => [
                'rule' => ['maxLength', 30],
                'message' => '20文字以内で入力してください。'
            ]
        ],
        'password' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => '何か入力してください。'
            ],
            'between' => [
                'rule' => ['between', 8, 20],
                'message' => '8文字以上20文字以内で入力してください。'
            ]
        ],
        'role' => [
            'valid' => [
                'rule' => [
                    'inList',[
                        'admin', 'author'
                    ]
                ],
                'message' => '権限をご確認ください。',
                'allowEmpty' => false
            ]
        ]
    ];


	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
	    return true;
	}

}
