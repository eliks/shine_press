<?php

class Message extends \Eloquent {

	// Add your validation rules here
	public static $rules =  array(
								'phone_number'  	=> 'min:9|max:25',
								'email' => 'email',
								);

	// Don't forget to fill this array
	protected $fillable = array('type','name','phone_number','email','content');
	
	protected $softDelete = true;
	
}