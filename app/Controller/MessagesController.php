
<?php
App::uses('AppController', 'Controller');

class MessagesController extends AppController {
    public function list() {
        $this->set('messages', $this->Message->find('all', array(
            'order' => array('Message.created' => 'desc'),
            'contain' => array('User')
        )));
    }

    public function add() {

        $id = $this->Auth->user('id');
        $name = $this->Auth->user('name');
        if (!$id) {
            throw new NotFoundException('Invalid user.');
        }

        $this->set('userId', $id);
        $this->set('userName', $name);
        $this->request->data['Message']['user_id'] = $id;
        
        if ($this->request->is('post')) {
            if ($this->Message->save($this->request->data)) {
                $this->Session->setFlash('Your message has been posted.');
            } else {
                $this->Session->setFlash('Failed to post message.');
            }
        }
    }
}

?>