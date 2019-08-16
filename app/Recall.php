<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recall extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'test_category', 'time', 'seri', 'iterasi', 'true_answer', 'false_answer', 'type'
    ];
}
