<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


   class Data extends Model
{
    protected $fillable = [
        'ename',
		'sname',
		'email',
		'phone',
		'jobtitle',
		'duty',
    ];
}