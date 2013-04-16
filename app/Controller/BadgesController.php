<?php
class BadgesController extends AppController {

	public function index() {
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
    }

}