<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shortcodeController extends Controller
{
    public function shortcodeContent(){
        return view('frontend.shortcode.shortcode-content');
    }
}
