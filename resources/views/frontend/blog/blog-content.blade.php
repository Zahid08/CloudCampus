@extends('frontend.master')
@section('title')
    Blog
@endsection
@section('content')
    {{--<link href="{{asset('/frontend/blog')}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />--}}
    {{--<link href="{{asset('/frontend/blog')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />--}}
    {{--<link href="{{asset('/frontend/blog')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />--}}

    {{--<link rel="stylesheet" href="{{asset('/frontend/blog')}}/fonts/css/font-awesome.min.css">--}}
    <div class="main_bg"><!-- start main -->
        <div class="container">
            <div class="main row">

                @foreach($blogs as $blog)
                    <div class="col-md-12">
                        <div style="text-align: center; ">
                           <h1 style="color: green">About <a href="#" style="color: green">{{$blog->blog_head}} </a></h1>
                        </div>
                        <a href="#">  <img class="" width="1000" height="300" src="{{ asset($blog->image_path) }}"></a>

                        <br/>
                        <div class="blog_list">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-calendar-o"></i><span>Publish Date :{{$blog->blog_pub_date}}</span></li>
                                <li><a href="#"><i class="fa fa-user"></i><span>Author Name : {{ $blog->author_name }}</span></a></li>
                            </ul>
                        </div>
                        <p class="para">
                        {{ str_limit($blog->blog_details, 100) }}
                        <div class="read_more">
                            <a href="{{url('/blog/details/'.$blog->id)}}" class="fa-btn btn-1 btn-1e"><h3 style="color: #0d6aad">view more</h3></a>
                        </div>
                    </div>
                @endforeach

                <div class="clearfix"></div>
            </div>
        </div>
    </div><!-- end main -->

@endsection