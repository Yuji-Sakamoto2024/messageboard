<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
    public $components = array('Paginator', 'Session', 'Auth');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register', 'logout');
        $this->Auth->fields = array(
            'email' => 'email',
            'password' => 'password'
        );
    }

    public function register() {
        if ($this->request->is('post')) {
            $this->User->create();
            print_r($this->request->data);
            exit;
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Registration has been completed. Please login.');
                return $this->redirect('/');
            } else {
                $this->Session->setFlash('Registration failed.');
            }
        }
    }

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->User->find('first', [
                'conditions' => ['email' => $this->request->data['User']['email']]
            ]);
           if ($this->Auth->login($user['User'])) {
                return $this->redirect(['action' => 'profile']);
            } else {
                $this->Session->setFlash('Your email address or password is invalid.');
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function profile() {
        $id = $this->Auth->user('id');
        if (!$id) {
            throw new NotFoundException('Invalid user.');
        }
        $this->set('user', $this->User->findById($id));
    }
    
    public function edit() {
        $id = $this->Auth->user('id');
        if (!$id) {
            throw new NotFoundException('Invalid user.');
        }

        if ($this->request->is('post') || $this->request->is('put')) {

            if (!empty($this->request->data['User']['photo']['tmp_name'])) {
                $file = $this->request->data['User']['photo'];
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $fileName = uniqid() . '.' . $ext;

                $uploadDir = '/Applications/XAMPP/xamppfiles/var/www/images/';
                $destination = $uploadDir . $fileName;

                if (move_uploaded_file($file['tmp_name'], $destination)) {
                    $this->request->data['User']['photo'] = '/images/' . $fileName;
                } else {
                    $this->Session->setFlash('File upload failed.');
                    return;
                }
            }
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Your profile has been updated.');
            } else {
                $this->Session->setFlash('Failed to update profile.');
            }
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }
}
?>