<?php
class BadgesController extends AppController {

	public function index() {
		echo 'Index!'; die();
    }

	//GET
    public function view($id) {
        $id = 2;
		$user_id = $this->User->findById($id);
		print_r($user_id); die();
        // $this->set(array(
            // 'recipe' => $recipe,
            // '_serialize' => array('recipe')
        // ));
    }
	
	//POST
    public function add($id) {
        $recipe = $this->Recipe->findById($id);
        $this->set(array(
            'recipe' => $recipe,
            '_serialize' => array('recipe')
        ));
    }

	//PUT
    public function edit($id) {
        $this->Recipe->id = $id;
        if ($this->Recipe->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

	//DELETE
    public function delete($id) {
        if ($this->Recipe->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

}