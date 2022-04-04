<?php

use Illuminate\Support\Facades\Route;



/*Route::get('/', function () {
    return view('Home');
});

Route::get('/about',function(){
        return view('AboutPage');
});
Route::get('/contact',function(){
    return view('ContactPage');
});*/

Route::get('/','App\Http\Controllers\siteController@Home');
Route::get('/about','App\Http\Controllers\siteController@About');
Route::get('/contact','App\Http\Controllers\siteController@Contact');

//Route::get('/',[siteController::class, 'Home']);
