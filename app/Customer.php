<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
		'name',
		'address',
		'phone',
		'order',
	];

	public $timestamps=false;
}
