<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Import the DB and Hash Class
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('users')->insert([
           'name'=>'nur',
           'email'=>'nur@gmail.com',
           'password'=>Hash::make('123')
       ]);
    }
}
