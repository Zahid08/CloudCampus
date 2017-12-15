<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public  function aboutContent(){
        return view('frontend.about.about-content');
    }
}
