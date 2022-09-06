<?php
// to create new controller

// php artisan make:controller PhotoController

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
public  function index(){
    $names=["wael","yazan","aham"];
        return view('welcome',["namesList"=>$names])->with('name','wael');

    }
    
}
