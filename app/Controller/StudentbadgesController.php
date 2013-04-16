<?php
class StudentbadgesController extends AppController {

	public function index() {
		//URL: http://site.com/studentbadges/?courseid=1&userid=1
		//Returns the entry in the DB in JSON.
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$badges = $this->Studentbadge->query('SELECT * FROM badges JOIN studentbadges USING (badgeid) 
				JOIN usercourses USING (usercourseid)
				JOIN users USING (userid)
				WHERE courseid = '.$_GET['courseid'].'
				AND userid = '.$_GET['userid'].';');
			$badges_json = json_encode($badges);
			echo $badges_json;
		}
		
		/* The name of the keys of the data you pass via POST and PUT 
		*  must be the same as the column names of the mentioned table.
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->Studentbadge->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		/*
		* For PUT and DELETE, URL: http://site.com/studentbadges/?id=1
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
			$this->Studentbadge->studentbadgeid = $_GET['id'];
			if ($this->Studentbadge->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
			if ($this->Studentbadge->delete($_GET['id'])) {
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