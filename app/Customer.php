<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $fillable=[
		'username',
		'addres',
		'phone',
		'order',
	];

	public $timestamps=false;

}
