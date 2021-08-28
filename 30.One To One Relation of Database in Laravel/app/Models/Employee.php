<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // function to get data from company model
    public function getCompany()
    {
        // Employe returns A one to one relation with Company        
        return $this->hasOne('App\Models\Company');

    }

}
