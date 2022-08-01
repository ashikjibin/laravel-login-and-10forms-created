<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


   class Inform extends Model
{
    protected $fillable = [
 		'name',
		'email',
		'address',
		'city',
		'state',
		'country',
		'zipcode',
		'mobile',
     ];
}