<?php

class Movie_genre extends AppModel {
	public $name = 'Movie_genre';
	public $hasMany = array("Movie","Member_info");
	public $recursive = 2;
	
	/*
	public $validate = array(
			'rule' => 'notEmpty'
		);
	*/
}
