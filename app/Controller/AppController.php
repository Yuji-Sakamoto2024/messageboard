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

 App::uses('Controller', 'Controller');

 class AppController extends Controller {
     public $components = array('Session', 'Auth');
 
     public function beforeFilter() {
         parent::beforeFilter();
         $this->Auth->authenticate = array(
             AuthComponent::ALL => array(
                 'userModel' => 'User',
                 'fields' => array(
                     'email' => 'email',
                     'password' => 'password'
                 ),
             ),
             'Form'
         );
     }
 }
?>