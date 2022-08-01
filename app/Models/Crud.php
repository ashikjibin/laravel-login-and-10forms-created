<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


   class Crud extends Model
{
    protected $fillable = [
        'index',
		'headline',
		'topics',
		'description',
		'comments',
    ];
}