<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'famille', 'num',
    ];



}
