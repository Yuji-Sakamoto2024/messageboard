<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $actsAs = array('Containable');

    public $validate = array(
        'name' => array(
            'allowEmpty' => true,
            'length' => array(
                'rule' => array('between', 5, 20),
                'message' => 'Please enter a name between 5 and 20 characters'
            )
        ),
        'email' => array(
            'rule' => 'email',
            'required' => true,
            'message' => 'Please enter your e-mail address'
        ),
        'birthday' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Please enter your birthday'
        ),        
        'password' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Please enter your password'
        ),        
        'photo' => array(
            //'allowEmpty' => true,
            'extension' => array(
                'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg')),
                'message' => 'The only image formats allowed are gif, jpeg, jpg, png'
            )
        )
    );    
}