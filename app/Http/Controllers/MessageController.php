<?php

namespace App\Http\Controllers;
use App\CreateMessage;
use App\Category;
use App\Designation;
use Image;
use DB;
use App\UserMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // For Front End
    public function showFrontEndMessageContent()
    {
        $designations=Designation::orderBy('id', 'asc')->get();
       // $message=CreateMessage::orderBy('id', 'asc')->get();
        $message = DB::table('create_messages')
            ->join('designations','create_messages.msg_from_desi_id','=','designations.id')
            ->select('create_messages.*','designations.deg_name')
            ->get();

        return view('frontend.message.authorise-message',
            ['message'=>$message]
        );

    }

    public function saveGuestMessageFrontEnd(Request $request)
    {
        $usrNsg=new UserMessage();
        $usrNsg->name = $request->name;
        $usrNsg->email = $request->email;
        $usrNsg->user_message = $request->user_message;
        $usrNsg->save();

        return redirect('/contact')->with('message', 'Your Message is send successfully.');
//        $table->string('name');
//        $table->string('email');
//        $table->text('user_message');
    }


    //For Admin
    public function viewMessageInfo(){

        $categories=Category::orderBy('id', 'asc')->get();
        $designations=Designation::orderBy('id', 'asc')->get();
        //$messages = CreateMessage::orderBy('id', 'desc')->get();
        $messages = DB::table('create_messages')
            ->join('categories','create_messages.msg_cat','=','categories.id')
            ->join('designations','create_messages.msg_from_desi_id','=','designations.id')
            ->select('create_messages.*','categories.category_name','designations.deg_name')
            ->get();

        return view('admin.message.show-message',[
            'messages' => $messages,
            'categories'=>$categories,
            'designations'=>$designations
        ]);
        // return view('admin.message.show-message', ['messages' => $messages]);
    }

    public function saveMessageInfo(Request $request){

       // return $request->msg_about;

        $msgImage = $request->file('msg_person_img');
        $imageName = $msgImage->getClientOriginalName();
        $directory= 'msg-person-imgs/';
        $imageUrl=$directory. $imageName;
        Image::make($msgImage)->save($imageUrl);

        $shMessage = new CreateMessage();
        $shMessage->msg_cat = $request->msg_cat;
        $shMessage->msg_name = $request->msg_name;
        $shMessage->msg_title = $request->msg_title;
        $shMessage->msg_from_desi_id = $request->msg_from_desi_id;
        $shMessage->msg_period = $request->msg_period;
        $shMessage->msg_about = $request->msg_about;
        $shMessage->msg_message = $request->msg_message;
        $shMessage->msg_person_img = $imageUrl;

        //return $shMessage;

        $shMessage->save();

        return redirect('/message/message')->with('message', 'Message info save successfully.');
    }



    public function updateMessageInfo(Request $request){

        $shMessageId = CreateMessage::find($request->id_M);
        $shMessageId->msg_cat = $request->msg_cat_M;
        $shMessageId->msg_name = $request->msg_name_M;
        $shMessageId->msg_title = $request->msg_title_M;
        $shMessageId->msg_from_desi_id = $request->msg_from_desi_id_M;
        $shMessageId->msg_period = $request->msg_period_M;
        $shMessageId->msg_about = $request->msg_about_M;
        $shMessageId->msg_message = $request->msg_message_M;

        $shMessageId->update();

        return redirect('/message/message')->with('message', 'Message info update successfully.');
    }

    public function deleteMessageInfo($id){
        $shMessageId = CreateMessage::find($id);
        $shMessageId->delete();

        return redirect('/message/message')->with('message', 'Message info delete successfully.');
    }


    public function inactiveMessageInfo($id){
        $shMessageId = CreateMessage::find($id);
        $shMessageId->msg_active = 0;
        $shMessageId->update();

        return redirect('/message/message')->with('message', 'Message Inactive  successfully.');
    }

    public function activeMessageInfo($id){
        $shMessageId = CreateMessage::find($id);
        $shMessageId->msg_active = 1;
        $shMessageId->update();

        return redirect('/message/message')->with('message', 'Message Aactive successfully.');
    }

    //For Guest Message
    public function viewGuestUserMessageInfo()
    {
        $userMsg = UserMessage::orderBy('id', 'desc')->get();
        return view('admin.message.user-message',['userMsg'=>$userMsg]);
    }

    public function deleteGuestUserMessageInfo($id){
        $userMsgId = UserMessage::find($id);
        $userMsgId->delete();

        return redirect('/message/user-messages')->with('message', 'Message info delete successfully.');
    }



}
