<?php
class User extends AppModel {
	public $actsAs = array('Containable');
    public $belongsTo = array('Usercourse');
}