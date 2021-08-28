<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // function to get data from Laptop model
    public function getLaptop()
    {
        // Employe returns A one to Many relation with Laptop        
        return $this->hasMany('App\Models\Laptop');

    }

}
