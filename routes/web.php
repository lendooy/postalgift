<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $nom="ali ";
    return view('welcome',['nom'=>$nom]);
});


Route::get('/form',function(){

    return view('leformulairepays');
});


Route::post('/form',function(){

    return "enregister avec succes ";
});

//teste des controlleur




Route::get('listeEtudiant',function(){
    $listEtu = ["Ali","Idriss","Moussa","samir"];

    //controller les donners
    return view('listeEtudiant',compact('listEtu'));
});
//les route a venir 
