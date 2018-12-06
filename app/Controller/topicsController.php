<?php

        class TopicsController extends AppController {
            public $components = array('Session');
            public function index() {
                // Read = displaying topics created in database
                $data = $this->Topic->find('all');
                $this->set('topics', $data);
                
            }

            // Creating topics in database
            public function add() {
                if($this -> request->is('post')) {
                    $this->Topic->create();
                  if($this->Topic->Save($this->request->data)){
                      $this->Session->setFlash('The topic has been created');
                      $this->redirect('index');
                  };
                }
            }

            // get topic by Id
            public function view($id) {
                $data = $this->Topic->findById($id);
                $this->set('topic', $data);
            }

            //edit topic
            public function edit($id) {
                $data = $this->Topic->findById($id);

                if ($this->request->is(array('post', 'put'))) {
                    $this->Topic->id = $id;
                    if($this->Topic->save($this->reques->data)) {
                        $this->Session->setFlash('The topic has been edited');
                        $this->redirect('index');
                    }
                }
                $this->request->data=$data;
            }

            //delete topic
	public function delete($id) {

	}
        }