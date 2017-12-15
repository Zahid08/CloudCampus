<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use Auth;
use Image;
use DB;
class BlogController extends Controller
{
    // Front End
//    public function blogContent(){
//        return view('frontend.blog.blog-content');
//    }
//
//    public  function  detailsBlog(){
//        return view('frontend.blog.blog-details');
//
//    }

// Front End
    public function blogContent(){
        $blogs = DB::table('blogs')->where('publication_status', 1)->take(5)->get();
        return view('frontend.blog.blog-content',
            ['blogs'=>$blogs]
        );
    }

    public  function  detailsBlog($id){
        $details = Blog::find($id);
        $comments = Comment::where('blog_id',$id)->get();
       // return $comments;

        $blogs = DB::table('blogs')->where('publication_status', 1)->take(5)->get();
        return view('frontend.blog.blog-details',[
            'details'=>$details,
            'blogs'=>$blogs,
            'comments'=>$comments
        ]);

    }



    // TSP Admin
    public function viewBlogInfo(){
        $categories=Category::orderBy('id', 'asc')->get();
        //$blogs = Blog::orderBy('id', 'desc')->get();

        $blogs = DB::table('blogs')
            ->join('categories','blogs.category_id','=','categories.id')
            ->select('blogs.*','categories.category_name')
            ->where('user_id',Auth::user()->id)
            ->get();

        return view('tsp.blog.blog', [
            'blogs' => $blogs,
            'categories'=>$categories
        ]);
    }

    public function viewAdminBlogInfo()
    {
        $categories=Category::orderBy('id', 'asc')->get();
        //$blogs = Blog::orderBy('id', 'desc')->get();

        $blogs = DB::table('blogs')
            ->join('categories','blogs.category_id','=','categories.id')
            ->select('blogs.*','categories.category_name')
            ->get();

        return view('admin.blog.blog', [
            'blogs' => $blogs,
            'categories'=>$categories
        ]);
    }

    public function saveBlogInfo(Request $request){
        $msgImage = $request->file('image_path');
        $imageName = $msgImage->getClientOriginalName();
        $directory= 'blog-images/';
        $imageUrl=$directory. $imageName;
        Image::make($msgImage)->save($imageUrl);

        $blog = new Blog();
        $blog->user_id = Auth::user()->id;
        $blog->category_id = $request->category_id;
        $blog->blog_head = $request->blog_head;
        $blog->blog_brief = $request->blog_brief;
        $blog->blog_details = $request->blog_details;
        $blog->author_name = Auth::user()->name;
        $blog->blog_pub_date = $request->blog_pub_date;
        $blog->image_path = $imageUrl;

        $blog->save();

        return redirect('/blog/blog')->with('message', 'Blog info Save successfully.');
    }



    public function updateBlogInfo(Request $request){

        $blog = Blog::find($request->id_M);

        $blog->category_id = $request->category_id;
        $blog->blog_head = $request->blog_head;
        $blog->blog_brief = $request->blog_brief;
        $blog->blog_details = $request->blog_details;
        $blog->author_name = Auth::user()->name;
        $blog->blog_pub_date = $request->blog_pub_date;
        //$blog->image_path = $request->image_path;

        $blog->update();

        return redirect('/blog/blog')->with('message', 'Blog info update successfully.');
    }

    public function deleteBlogInfo($id){
        $blogId = Blog::find($id);
        $blogId->delete();

        return redirect('/blog/blog')->with('message', 'Blog info delete successfully.');
    }

    //for admin panel
    public function unpublishAdminBlog($id){
        $blogId = Blog::find($id);
        $blogId->publication_status = 0;
        $blogId->update();

        return redirect('/blog/admin-blog')->with('message', 'Blog Unpublish  successfully.');
    }

    public function publishAdminBlog($id){
        $blogId = Blog::find($id);
        $blogId->publication_status = 1;
        $blogId->update();

        return redirect('/blog/admin-blog')->with('message', 'Blog Publish successfully.');
    }



}
