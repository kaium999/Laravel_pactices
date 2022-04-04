<?php

use Illuminate\Support\Facades\Route;



/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/name/{firstname}/{lastname}','App\Http\Controllers\blade_controller@show');
