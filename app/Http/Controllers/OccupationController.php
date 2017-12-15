<?php

namespace App\Http\Controllers;
use App\Occupation;
use Illuminate\Http\Request;

class OccupationController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//    public  function showOccupationForm(){
//        return view('admin.occupation.occupation');
//    }

    public function saveOccupationInfo(Request $request){
        $occupation = new Occupation();
        $occupation->occupation_name = $request->occupation_name;
        $occupation->remarks = $request->remarks;

        $occupation->save();
        return redirect('/occupation/occupation')->with('message', 'Occupation info save successfully.');
    }

    public function viewOccupationInfo(){
        $occupations = Occupation::orderBy('id', 'desc')->get();
        return view('admin.occupation.occupation', ['occupations' => $occupations]);
    }

    public function updateOccupationInfo(Request $request){

        $occupationId = Occupation::find($request->id_M);
        $occupationId->occupation_name = $request->occupation_name_M;
        $occupationId->remarks = $request->remarks_M;

        $occupationId->update();
        return redirect('/occupation/occupation')->with('message', 'Occupation info update successfully.');
    }

    public function deleteOccupationInfo($id){
        $occupationId = Occupation::find($id);
        $occupationId->delete();

        return redirect('/occupation/occupation')->with('message', 'Occupation info delete successfully.');
    }
}
