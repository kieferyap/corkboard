<?php
class UserController extends AppController {
	public $components = array('RequestHandler');

	public function index() {
		echo '>>>'.$_SERVER['REQUEST_METHOD'];
		echo 'Index!'; die();
    }

    //GET
    public function view($id) {
        $id = 2;
		$user_id = $this->User->findByUserid($id);
		print_r($user_id); die();
        // $this->set(array(
            // 'recipe' => $recipe,
            // '_serialize' => array('recipe')
        // ));
    }
	
	//POST
    public function add($id) {
		echo 'POST>>>'.$_POST['user'];
    }

	//PUT
    public function edit($id) {
    }

	//DELETE
    public function delete($id) {
    }

}