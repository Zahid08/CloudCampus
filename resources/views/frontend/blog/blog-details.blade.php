@extends('frontend.master')
@section('title')
    Blog
@endsection
@section('content')
    <div class="courses_box1">
        <div class="container">
            <div class="col-md-8 detail">
                <img src="{{asset($details->image_path)}}" class="" width="30" height="300" alt=""/>
                <h3>Blog Overview</h3>
                <p>
                    {{$details->blog_details}}
                </p>
                <div class="author-box">
                    <div class="author-box-left"><img src="{{asset($details->image_path)}}" class="img-responsive" alt=""/></div>
                    <div class="author-box-right">
                        <h3 style="color: green;">Author by <a href="#"></a>{{$details->author_name}}</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="comment_section">
                    <h4>Comments</h4>
                    <ul class="comment-list">
                        @foreach($comments as $comment)
                        <li>
                            <div class="author-box">
                                <div class="author-box_left"><img src="{{asset('/frontend')}}/images/team2.jpg" class="img-responsive" alt=""/></div>
                                <div class="author-box_right">
                                    <h5><a href="#">Guest</a><span class="pull-right"></span></h5>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <form class="comment-form" method="post" action="{{url('/comments/'.$details->id)}}">
                    {{csrf_field()}}
                    <h4>Leave a comment</h4>
                    <div class="col-md-6 comment-form-left">
                        <textarea name="comment" aria-required="true" id="comment" class="form-control" placeholder="Comment"></textarea>
                    </div>
                    <div class="col-md-6 comment-form-right">
                        <button type="submit" name="btn" class="btn btn-info">Add Comment</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4" >
                <ul class="posts">
                    <h3>Recent Posts</h3>
                    @foreach($blogs as $blog)
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb pull-left">
                                    <img class="" width="30" height="50" src="{{ asset($blog->image_path) }}">
                                </div>
                                <div class="entry-content">
                                    <h6><a href="{{url('/blog/details/'.$blog->id)}}">Established</a></h6>
                                    <p><a href="{{url('/blog/details/'.$blog->id)}}">{{$blog->author_name}}</a> &nbsp;/&nbsp; {{$blog->blog_pub_date}}</p>
                                </div>
                                <div class="clearfix"> </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>



@endsection