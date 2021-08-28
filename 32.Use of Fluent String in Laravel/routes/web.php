<?php


use Illuminate\Support\Facades\Route;


// Import Str Class
use Illuminate\Support\Str;

Route::get('/', function () {

    // Simple String Data
    $data="hello i am Nur";

// Without Using Fluent String
    // $data=Str::ucFirst($data);
    // $data=Str::replaceFirst("Hello","ohho",$data);
    // $data=Str::camel($data);


// With Using Fluent String
// of() method enable the fluent String facility
$data=Str::of($data)
    ->ucFirst($data)
    ->replaceFirst("Hello","ohho",$data)
    ->camel($data);

    return  $data;
});



