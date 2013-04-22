<?php
class UserController extends AppController {
<<<<<<< HEAD

	public function index() {
		//URL: http://site.com/user/?userid=1
		//Returns the entry in the DB in JSON.
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$user = $this->User->findByUserid($_GET['userid']);
			$user_json = json_encode($user);
			echo $user_json;
		}
		
		/* The name of the keys of the data you pass via POST and PUT 
		*  must be the same as the column names of the mentioned table.
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->User->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		/*
		* For PUT and DELETE, URL: http://site.com/user/?id=1
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
			$this->User->userid = $_GET['id'];
			if ($this->User->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
			if ($this->User->delete($_GET['id'])) {
				$message = 'Deleted';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		else{
			echo 'Not a REST request.';
		}
		
		die();
=======
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
>>>>>>> 799f1009ecbc105572106edd6e44ac7d7eac6482
    }

}