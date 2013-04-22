<?php
class UsercourseController extends AppController {

	public function index() {
		//URL: http://site.com/usercourse/?courseid=1&is_users=1 OR http://site.com/usercourse/?userid=1&is_users=0
		//Returns the entry in the DB in JSON.
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			if($_GET['is_users'] == 1){
				$course = $this->Usercourse->query('SELECT * FROM users JOIN usercourses USING (userid) WHERE courseid = '.$_GET['courseid'].';');
				$course_json = json_encode($course);
				echo $course_json;
			}
			else{
				$classes = $this->Usercourse->query('SELECT courseid FROM usercourses WHERE userid = '.$_GET['userid'].';');
				$classes_json = json_encode($classes);
				echo $classes_json;
			}
		}
		
		/* The name of the keys of the data you pass via POST and PUT 
		*  must be the same as the column names of the mentioned table.
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->Usercourse->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		/*
		* For PUT and DELETE, URL: http://site.com/usercourse/?id=1
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
			$this->Usercourse->usercourseid = $_GET['id'];
			if ($this->Usercourse->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
			if ($this->Usercourse->delete($_GET['id'])) {
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