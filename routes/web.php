<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $lescolis=0;
    return view('welcome',["lescolis"=>$lescolis]);
});

Route::get('/register',function(){
    return view('register');
});

Route::post("/register",function(Request $request ){
    dd($request->All());
    return "colis enregistrer";
});
