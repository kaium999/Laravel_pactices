<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    /*function Home(){
        return"Hi I Am  Home From Site Controller";

    }
    function About(){
        return"Hi I Am  About From Site Controller";
    }
    function Contact(){
        return"Hi I Am Contact From Site Controller";
    }*/

    function Home(){
        return view('Home');

    }
    function About(){
        return view('AboutPage');
    }
    function Contact(){
        return view('ContactPage');
    }
}
