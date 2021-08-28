<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    // You should disable the timestamps as
    public $timestamps=false;


    // To use the Mutator to modify the data before insert into database

    // 1)To Modify name colums value before insert as below
    public function setNameAttribute($value) //function should be like this
    {
        $this->attributes['name']="Mr ". $value;
    }
    // 2)To Modify email colums value before insert as below
    public function setEmailAttribute($value) //function should be like this
    {
        $this->attributes['email']=$value . ".org";
    }

}
