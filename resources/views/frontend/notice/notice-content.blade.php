@extends('frontend.master')
@section('title')
    Notice
@endsection
@section('content')
    {{--<link href="{{asset('/frontend/notice')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />--}}
    <link href="{{asset('/frontend/notice')}}/css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/frontend/notice')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/frontend/notice')}}/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />

    <div class="blog_agileits" id="blog">
        <div class="blog_head_wthree text-center">
            <h3>Notice</h3>
            <h4>Top Notice</h4>
        </div>
    </div>

    <div style="margin-top: 200px; box-sizing: border-box;">
        <div class="blog-grids-w3ls">
            <div class="container">
                <div class="blog-grid-main">

                    <div class="blog">
                        @foreach($notices as $notice)
                            @if($notice->notice_show==1)

                                <div class="blog_grid_agile">
                                    <div class="blog-a col-md-2 col-sm-3 col-xs-12 text-center">
                                        <h4> {{$notice->notice_day}}</h4>
                                        <h5>{{$notice->notice_month}}</h5>
                                        <span>{{$notice->notice_year}}</span>
                                    </div>
                                    <div style="margin-left: 50px;" class="blog-bg  col-md-4 col-sm-3 col-xs-12"><a href="#" data-toggle="modal" data-target="#myModal"><img src="{{ asset($notice->file_name) }}"  style="height: 200px;" class="img-responsive" alt="img"/></a></div>
                                    <div class="blog-b col-md-5 col-sm-6 col-xs-12">
                                        <h4><a href="#">{{ str_limit($notice->notice_name, 100) }}</a></h4>
                                        <h5>{{ str_limit($notice->notice_body, 60) }}</h5>
                                        <button id="{{$notice->id }}" class="btn btn-primary text-center button_w3layouts" data-toggle="modal" data-target="#myModal{{$notice->id }}">READ MORE<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endif
                        @endforeach

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>


        @foreach($notices as $notice)
            <div class="tooltip-content">
                <div class="modal fade features-modal" id="myModal{{ $notice->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">{{ str_limit($notice->notice_name, 100) }}</h4>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset($notice->file_name) }}" alt="image">
                                <p>{{ $notice->notice_body }}</p>
                            </div><hr>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection