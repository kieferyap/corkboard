<?php
class BadgesController extends AppController {

	public function index() {
<<<<<<< HEAD
		//URL: http://site.com/badges/?badgeid=1
		//Returns the entry in the DB in JSON.
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$badge = $this->Badge->findByBadgeid($_GET['badgeid']);
			$badge_json = json_encode($badge);
			echo $badge_json;
		}
		
		/* The name of the keys of the data you pass via POST and PUT 
		*  must be the same as the column names of the mentioned table.
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->Badge->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}		
		
		/*
		* For PUT and DELETE, URL: http://site.com/badges/?id=1
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
			$this->Badge->badgeid = $_GET['id'];
			if ($this->Badge->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
			if ($this->Badge->delete($_GET['id'])) {
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
>>>>>>> 799f1009ecbc105572106edd6e44ac7d7eac6482
    }

}