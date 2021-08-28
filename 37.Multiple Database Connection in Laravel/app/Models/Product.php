<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    //this is the table of second database,
    // So to access this model we have to define connection variable
    public $connection="mysql2";
}
