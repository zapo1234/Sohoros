<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    //@ var array

    //
	protected $fillable = [
        'name', 'famille','matricule','categories','image','email','age',
    ];

    
}
