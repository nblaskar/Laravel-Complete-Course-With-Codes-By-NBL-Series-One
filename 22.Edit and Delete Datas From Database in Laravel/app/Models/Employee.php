<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // // if DB Table and model name not Match Then
    // public $table="employees";

        // // also during data insert/update, if you dont want to create created_at and updated_at table then you have to desable the time stamps here
        public $timestamps=false;



}
