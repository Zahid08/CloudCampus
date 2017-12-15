<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public  function  serviceContent(){
        return view('frontend.service.service-content');
    }
}
