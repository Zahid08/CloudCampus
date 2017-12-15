<?php

namespace App\Http\Controllers;
use App\Subjects;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//    public  function showSubjectForm(){
//        return view('admin.subject.subject');
//    }

    public function saveSubjectInfo(Request $request){
        $subject = new Subjects();
        $subject->sub_code = $request->sub_code;
        $subject->sub_name = $request->sub_name;
        $subject->sub_description = $request->sub_description;

        $subject->save();
        return redirect('/subject/subject')->with('message', 'Subject info save successfully.');
    }

    public function viewSubjectInfo(){
        $subjects = Subjects::orderBy('id', 'desc')->get();
        return view('admin.subject.subject', ['subjects' => $subjects]);
    }

    public function updateSubjectInfo(Request $request){

        $subjectId = Subjects::find($request->id_M);
        $subjectId->sub_code = $request->sub_code_M;
        $subjectId->sub_name = $request->sub_name_M;
        $subjectId->sub_description = $request->sub_description_M;

        $subjectId->update();
        return redirect('/subject/subject')->with('message', 'Subject info update successfully.');
    }

    public function deleteSubjectInfo($id){
        $subjectId = Subjects::find($id);
        $subjectId->delete();

        return redirect('/subject/subject')->with('message', 'Subject info delete successfully.');
    }
}
