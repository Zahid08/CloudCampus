<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Blog;
use Auth;
use DB;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function viewCommentInfo(){

        $comments = DB::table('comments')
            ->join('blogs','comments.blog_id','=','blogs.id')
            ->select('comments.*','blogs.blog_head')
            ->where('blogs.user_id',Auth::user()->id)
            ->get();

        return view('tsp.blog.comment',['comments' => $comments]);
        // return view('admin.message.show-message', ['messages' => $messages]);
    }

    public function deleteCommentInfo($id){
        $commentId = Comment::find($id);
        $commentId->delete();

        return redirect('/blog/comment')->with('message', 'Comment delete successfully.');
    }


    public  function  userComment(Request $request, $id){
        $comments =new Comment();
        $comments->blog_id =$id;
        $comments->comment = $request->comment;
        $comments->save();
        return redirect('/blog');


    }


}
