<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contactContent(){
        return view('frontend.contact.contact-content');
    }
}
