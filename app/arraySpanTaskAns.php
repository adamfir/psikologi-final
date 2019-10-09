<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class arraySpanTaskAns extends Model
{
    //
    protected $fillable = [
        'userId', 'seri', 'iterasi', 'test' , 'question', 'forward', 'backward', 'time'
    ];

}
