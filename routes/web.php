<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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




//  to get all route

//php artisan route:list   




 // controller index function
Route::get('/', 'App\Http\Controllers\maincontroller@index');

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



/* Route::get('/home/{name}', function ($name) {
    
        return view('home',['my_name'=> $name]);
    });*/


Route::view('/me','about',['my_name'=> 'wael from me']);

Route::resource('/myPostes','App\Http\Controllers\PosteController');

Route::resource('/myProjects','App\Http\Controllers\ProjectsController');


Auth::routes();

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view'); 
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');



