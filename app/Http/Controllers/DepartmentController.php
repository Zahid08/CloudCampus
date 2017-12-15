<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//    public  function showDepartmentForm(){
//        return view('admin.department.department');
//    }

    public function saveDepartmentInfo(Request $request){
        $department = new Department();
        $department->dpt_name = $request->dpt_name;
        $department->dpt_description = $request->dpt_description;

        $department->save();
        return redirect('/department/department')->with('message', 'Department info save successfully.');
    }

    public function viewDepartmentInfo(){
        $departments = Department::orderBy('id', 'desc')->get();
        return view('admin.department.department', ['departments' => $departments]);
    }

    public function updateDepartmentInfo(Request $request){

        $departmentId = Department::find($request->id_M);
        $departmentId->dpt_name = $request->dpt_name_M;
        $departmentId->dpt_description = $request->dpt_description_M;

        $departmentId->update();
        return redirect('/department/department')->with('message', 'Department info update successfully.');
    }

    public function deleteDepartmentInfo($id){
        $departmentId = Department::find($id);
        $departmentId->delete();

        return redirect('/department/department')->with('message', 'Department info delete successfully.');
    }
}
