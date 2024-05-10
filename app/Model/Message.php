<?php
App::uses('AppModel', 'Model');

class Message extends AppModel {
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );

    public $validate = array(
        'content' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Please enter your message'
            )
        )
    );
}