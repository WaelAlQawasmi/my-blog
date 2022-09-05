<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//(URI,Viow,array of data)

Route::get('/about', function () {

    return view('about',['my_name'=> 'wael from about']);
});

Route::get('/req', function () {
$name= request("name");
    return view('about',['my_name'=> $name]);
});


Route::get('/pathvar/{name}', function ($name) {

        return view('about',['my_name'=> $name]);
    });



    Route::get('/my/{name}', function ($name) {
    
        return $name;
    });



    Route::get('/home/{name}', function ($name) {
    
        return view('home',['my_name'=> $name]);
    });


Route::view('/me','about',['my_name'=> 'wael from me']);
