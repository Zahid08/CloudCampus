<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{

//    public  function showCourseForm(){
//        return view('admin.course.add-course');
//    }

    public function saveCourseInfo(Request $request){
        $course = new Course();
        $course->course_code = $request->course_code;
        $course->course_name = $request->course_name;
        $course->course_duration = $request->course_duration;
        $course->course_start_date = $request->course_start_date;
        $course->save();

        return redirect('/course/add-course')->with('message', 'Course info save successfully.');
    }

    public function viewCourseInfo(){
        $courses = Course::orderBy('id', 'desc')->get();
        return view('admin.course.add-course', ['courses' => $courses]);
    }

    public function updateCourseInfo(Request $request){

        $courseId = Course::find($request->id_M);
        $courseId->course_code = $request->course_code_M;
        $courseId->course_name = $request->course_name_M;
        $courseId->course_duration = $request->course_duration_M;
        $courseId->course_start_date = $request->course_start_date_M;

        $courseId->update();

        return redirect('/course/add-course')->with('message', 'Course info update successfully.');
    }

    public function deleteCourseInfo($id){
        $courseId = Course::find($id);
        $courseId->delete();

        return redirect('/course/add-course')->with('message', 'Course info delete successfully.');
    }

}
