<?php

class Author extends Eloquent {
	public static $table = 'authors';
	public static $accessible = array('name','bio');

	public static $rules = array(
		'name'=>'required|min:5',
		'bio'=>'required|min:20'
		);
	public static function validate($data){
		return Validator::make($data,static::$rules);
	}
	
}