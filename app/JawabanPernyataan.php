<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanPernyataan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'test_category', 'is_true', 'time_left', 'seri', 'iterasi'
    ];
}
