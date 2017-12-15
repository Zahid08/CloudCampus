<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type == 'ad'){

//            $profile = Profile::where('user_id', Auth::user()->id)->first();
//            return view('admin.home.home-content',['profile' => $profile]);
            return view('admin.home.home-content');

        }elseif(Auth::user()->user_type == 'te'){
            return view('tsp.home.home-content');
        }
        else
        {
             // for logout
            //return redirect('logout');
        }
    }

}
