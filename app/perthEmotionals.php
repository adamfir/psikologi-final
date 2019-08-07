<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perthEmotionals extends Model
{
    //
    protected $fillable = [
        'userId', 'q10', 'q11', 'q20', 'q21', 'q30', 'q31', 'q40', 'q41', 'q50', 'q51', 'q60', 'q61', 'q70', 'q71', 'q80', 'q81', 'q90', 'q91', 'q100', 'q101', 
        'q110', 'q111', 'q120', 'q121', 'q130', 'q131', 'q140', 'q141', 'q150', 'q151', 'q160', 'q161', 'q170', 'q171', 'q180', 'q181'
    ];

}
