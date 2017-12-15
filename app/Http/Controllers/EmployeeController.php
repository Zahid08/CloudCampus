<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Designation;
use App\Department;
use Illuminate\Http\Request;
use Image;
use DB;
class EmployeeController extends Controller
{
//    public  function  showStafContent(){
//        return view('frontend.staff.staff-content');
//    }

    public  function  showStafContent(){
        $employess=Employee::orderBy('id', 'asc')->get();
        return view('frontend.staff.staff-content',
            ['employees'=>$employess]
        );
    }

    public function viewEmployeeInfo(){

        $departments=Department::orderBy('id', 'asc')->get();
        $designations=Designation::orderBy('id', 'asc')->get();
        //$messages = CreateMessage::orderBy('id', 'desc')->get();
        $employees = DB::table('employees')
            ->join('departments','employees.department_id','=','departments.id')
            ->join('designations','employees.designation_id','=','designations.id')
            ->select('employees.*','departments.dpt_name','designations.deg_name')
            ->get();

        return view('admin.employee.employee',[
            'employees' => $employees,
            'departments'=>$departments,
            'designations'=>$designations
        ]);
        // return view('admin.message.show-message', ['messages' => $messages]);
    }


    public function saveEmployeeInfo(Request $request){

       //return $request->department_id;

        $imagePath = $request->file('image_path');
        $imageName = $imagePath->getClientOriginalName();
        $directory= 'stuff-images/';
        $imageUrl=$directory. $imageName;
        Image::make($imagePath)->save($imageUrl);

        $employee = new Employee();
        $employee->employee_id = $request->employee_id;
        $employee->employee_name = $request->employee_name;
        $employee->employee_type = $request->employee_type;
        $employee->department_id = $request->department_id;
        $employee->designation_id = $request->designation_id;
        $employee->education = $request->education;
        $employee->join_date = $request->join_date;
        $employee->image_path = $imageUrl;

        //return $employee;

        $employee->save();

        return redirect('/employee/employee')->with('message', 'Employee info save successfully.');
    }


    public function updateEmployeeInfo(Request $request){

        $employee = Employee::find($request->id_M);

        $employee->employee_id = $request->employee_id_m;
        $employee->employee_name = $request->employee_name_m;
        $employee->employee_type = $request->employee_type_m;
        $employee->department_id = $request->department_id_m;
        $employee->designation_id = $request->designation_id_m;
        $employee->education = $request->education_m;
        $employee->join_date = $request->join_date_m;

        //$employee->image_path = $imageUrl;

        $employee->update();

        return redirect('/employee/employee')->with('message', 'Employee info update successfully.');
    }


    public function deleteEmployeeInfo($id){
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/employee/employee')->with('message', 'Employee info delete successfully.');
    }


    public function inactiveEmployeeInfo($id){
        $employee = Employee::find($id);
        $employee->is_active = 0;
        $employee->update();

        return redirect('/employee/employee')->with('message', 'Employee Inactive  successfully.');
    }


    public function activeEmployeeInfo($id){
        $employee = Employee::find($id);
        $employee->is_active = 1;
        $employee->save();

        return redirect('/employee/employee')->with('message', 'Employee Aactive successfully.');
    }



}
