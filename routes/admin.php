<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function () {
// Route::get('/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
// Route::post('/register',[RegisterController::class,'createAdmin'])->name('admin.register');
// }
// );

Route::get('/admin-login',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view'); 
Route::post('/admin-login',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');