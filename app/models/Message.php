<?php

class Message extends \Eloquent {

	// Add your validation rules here
	public static $rules =  array(
								// 'email' => 'email',
								);

	// Don't forget to fill this array
	protected $fillable = array('type','name','telephone','email','content');
	
	protected $softDelete = true;
	
}