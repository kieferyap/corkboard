<?php
class CourseController extends AppController {

<<<<<<< HEAD
	public function index() {
		//URL: http://site.com/course/?courseid=1
		//Returns the entry in the DB in JSON.
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$course = $this->Course->findByCourseid($_GET['courseid']);
			$course_json = json_encode($course);
			echo $course_json;
		}
		
		/* The name of the keys of the data you pass via POST and PUT 
		*  must be the same as the column names of the mentioned table.
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->Course->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		/*
		* For PUT and DELETE, URL: http://site.com/course/?id=1
		*/
		else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
			$this->Course->courseid = $_GET['id'];
			if ($this->Course->save($this->request->data)) {
				$message = 'Saved';
			} else {
				$message = 'Error';
			}
			echo $message;
		}
		
		else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
			if ($this->Course->delete($_GET['id'])) {
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
=======
	public function test(){
		echo 'Here!'; die();
	}
>>>>>>> 799f1009ecbc105572106edd6e44ac7d7eac6482

}