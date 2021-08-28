<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // To use the Accessor we have to make below like functions for every column related

    // 1) To make name columns values as lower case first latter
    public function getNameAttribute($value) //function should be like this
    {
        return lcFirst($value);
    }

    // 2) To make email colums values as upper letter string and add one message
    public function getEmailAttribute($value) //function should be like this
    {
        return 'Email is= ' . strtoupper($value);
    }

}
