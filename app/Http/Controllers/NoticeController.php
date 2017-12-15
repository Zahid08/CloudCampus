<?php

namespace App\Http\Controllers;
use App\FileNotice;
use Illuminate\Http\Request;
use App\Department;
use Image;
class NoticeController extends Controller
{
    public  function  showNoticeContent(){

        $notices=fileNotice::orderBy('id','desc')->take(3)->get();
        return view('frontend.notice.notice-content',['notices' => $notices]);
    }

    //for filenotice

    public  function showFileNoticeForm(){

        $departments=Department::orderBy('id', 'asc')->get();
        return view('admin.notice.file-notice-content',['departments'=>$departments]);
    }

    public function savefileNoticetInfo(Request $request){

        $noticefile = $request->file('file_name');
        $imageName = $noticefile->getClientOriginalName();
        $directory= 'notice-images/';
        $imageUrl = $directory.$imageName;

        Image::make($noticefile)->save($imageUrl);

        $notice=new FileNotice();
        $notice->notice_name=$request->notice_name;
        $notice->notice_day	=$request->notice_day;
        $notice->notice_month=$request->notice_month;
        $notice->notice_year=$request->notice_year;
        $notice->notice_dept=$request->notice_dept;
        $notice->notice_body=$request->notice_body;

        $notice->file_name=$imageUrl;

        $notice->save();
        return redirect('/file-notice/add-notice')->with('message', 'Notice info save successfully.');
    }

    public  function  viewfileNoticetInfo(){
        $departments=Department::orderBy('id', 'asc')->get();
        $notices=fileNotice::orderBy('id','desc')->get();
        return view('admin.notice.mange-file-notice-content',[
            'notices'=>$notices,
            'departments'=>$departments
            ]);
    }

    public  function  unpublishedfileNotice($id){

        $noticeByID = fileNotice::find($id);
        $noticeByID->notice_show= 0;
        $noticeByID->save();
        return redirect('/manage-file-notice/manage-notice')->with('message', 'Notice info unpublished successfully.');

    }

    public function publishedFiletNoticeInfo($id){
        $noticeByID = fileNotice::find($id);
        $noticeByID->notice_show= 1;
        $noticeByID->save();
        return redirect('/manage-file-notice/manage-notice')->with('message', 'Notice info unpublished successfully.');

    }



    public function updateFileNoticeInfo(Request $request){

        $noticefileedit = $request->file('file_name_M');
        $imageName = $noticefileedit->getClientOriginalName();
        $directory= 'notice-images/';
        $imageUrl = $directory.$imageName;
        Image::make($noticefileedit)->save($imageUrl);


        $notice=new fileNotice();
        $notice = fileNotice::find($request->id_M);

        $notice->notice_name=$request->notice_name_M;
        $notice->notice_day	=$request->notice_day_M;
        $notice->notice_month=$request->notice_month_M;
        $notice->notice_year=$request->notice_year_M;
        $notice->notice_dept=$request->notice_dept_M;
        $notice->notice_body=$request->notice_body_M;
        $notice->file_name=$imageUrl;

        $notice->update();
        return redirect('/manage-file-notice/manage-notice')->with('message', 'Notice info Update successfully.');
    }



}
