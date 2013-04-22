<?php
class Usercourse extends AppModel {
	public $actsAs = array('Containable');
    public $hasMany = array('User');
}