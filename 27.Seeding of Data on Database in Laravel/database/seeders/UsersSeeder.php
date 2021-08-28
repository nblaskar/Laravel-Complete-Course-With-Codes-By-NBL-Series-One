<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// import DB class for Database
use Illuminate\Support\Facades\DB;

// import Str Class to create string
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //write the code to insert dymmy data into database
        DB::table('employees')->insert([
            'name'=>Str::Random(10),
            'email'=>Str::Random(10).'@gmail.com',
        ]);

    }
}
