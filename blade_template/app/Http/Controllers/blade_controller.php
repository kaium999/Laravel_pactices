<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blade_controller extends Controller
{
    function show($firstname,$lastname){
        $students=['kaium','Ashik','Parnto'];
        return view('Welcome',['fistname'=>$firstname,'lastname'=>$lastname,'student'=>$students]);
    }
}
