<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;

class courseController extends Controller
{


    public  function courseContent(){
        $courses = Course::orderBy('id', 'desc')->get();
        return view('frontend.course.course-content',['courses'=>$courses]);
    }





}
