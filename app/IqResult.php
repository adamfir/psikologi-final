<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IqResult extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'name', 'iq', 'memory', 'iq_category', 'memory_category'
    ];
}
