<?php

namespace App\Http\Controllers;
use App\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//    public  function showDesignationForm(){
//        return view('admin.designation.designation');
//    }

    public function saveDesignationInfo(Request $request){
        $designation = new Designation();
        $designation->deg_name = $request->deg_name;
        $designation->remarks = $request->remarks;

        $designation->save();
        return redirect('/designation/designation')->with('message', 'Designation info save successfully.');
    }

    public function viewDesignationInfo(){
        $designations = Designation::orderBy('id', 'desc')->get();
        return view('admin.designation.designation', ['designations' => $designations]);
    }

    public function updateDesignationInfo(Request $request){

        $designationId = Designation::find($request->id_M);
        $designationId->deg_name = $request->deg_name_M;
        $designationId->remarks = $request->remarks_M;

        $designationId->update();
        return redirect('/designation/designation')->with('message', 'Designation info update successfully.');
    }

    public function deleteDesignationInfo($id){
        $designationId = Designation::find($id);
        $designationId->delete();

        return redirect('/designation/designation')->with('message', 'Designation info delete successfully.');
    }
}
