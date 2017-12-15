@extends('frontend.master')
@section('title')
    About
@endsection
@section('content')
    <div class="about-page">
        <div class="container">
            <h3 class="tittle">About</h3>
            <div class="about-grids">
                <div class="col-md-6 about-grid wow fadeInRight animated" data-wow-delay=".5s">
                    {{--<img src="images/a1.jpg" alt=" " class="img-responsive" />--}}
                    <img src="{{asset('/frontend')}}/images//campus.jpg" alt=" " class="img-responsive"/>
                </div>
                <div class="col-md-6 about-grid wow fadeInLeft animated" data-wow-delay=".5s">
                    <h4>Our History</h4>
                    <div class="about-gd">
                        <div class="about-gd-left">
                            <h5>1995 -</h5>
                        </div>
                        <div class="about-gd-right">
                            <p>The Cloud Campus started its activities with 3 Faculties,12 Departments, 60 teachers, 877
                                students and 3 dormitories (Halls of Residence) for the students. At present the
                                University consists of 13 Faculties, 77 Departments, 11 Institutes, 20 residential halls,
                                3 hostels and more than 51 Research Centres.
                                The number of students and teachers has risen to about 37,064 and 1,885 respectively.
                                </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="about-gd">
                        <div class="about-gd-left">
                            <h5>2017 -</h5>
                        </div>
                        <div class="about-gd-right">
                            <p>The Freshers’ Reception and Graduates' Farewell Ceremony 2017,
                               Cloud Campus was held on 5th August 2017, welcoming the freshers of
                                BSSE 9th Batch and bidding farewell to the graduates of BSSE 5th Batch.
                            </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    {{--<div class="about-gd">--}}
                        {{--<div class="about-gd-left">--}}
                            {{--<h5>2000 -</h5>--}}
                        {{--</div>--}}
                        {{--<div class="about-gd-right">--}}
                            {{--<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam--}}
                                {{--corporis suscipit laboriosam.</p>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"> </div>--}}
                    {{--</div>--}}

                    {{--<div class="about-gd">--}}
                        {{--<div class="about-gd-left">--}}
                            {{--<h5>2015 -</h5>--}}
                        {{--</div>--}}
                        {{--<div class="about-gd-right">--}}
                            {{--<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam--}}
                                {{--corporis suscipit laboriosam.</p>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"> </div>--}}
                    {{--</div>--}}

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- history -->
    <div class="history">
        <div class="container">
            <h3 class="tittle">Our Standards</h3>
            <div class="col-md-6 history-left">
                <div class="history-left-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <p><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>21.10.2017</p>
                    <h4>The Status Of Cloud Campus</h4>
                    <p class="aut">At the beginning a distinctive feature of the Cloud Campus was its non affiliating, residential character like that of the Oxford of England. However,
                        since 1947 the University was given an affiliating mandate
                        in place of an exclusive residential-cum-teaching character.</p>
                </div>
                <div class="history-left-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <p><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>28.10.2017</p>
                    <h4>Aims and Objects</h4>
                    <p class="aut">While serving as the highest echelon of academic excellence, the University
                        also functions as a central premise for free thought and democratic practices that would
                        lead the nation to its march towards progress. The Cloud Campus is increasingly striving to
                        combine the pursuit of knowledge and truth with the values and needs of an evolving society.</p>
                </div>
            </div>
            <div class="col-md-6 history-right wow fadeInRight animated" data-wow-delay=".5s">

                <h4>Cloud Campus</h4>
                <p>The main purpose of the University was to create new areas of knowledge and
                    disseminate this knowledge to the society through its students. Since its inception
                    the University has a distinct character of having distinguished scholars as
                    faculties who have enriched the global pool of
                    knowledge by making notable contributions in the fields of teaching and research.</p>
                <ul>
                    <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>recusandae aut perferendis</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>voluptatibus maiores alias</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>molestiae non recusandae</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>alias consequatur voluptates</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>tenetur a sapiente delectus</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>earum rerum hic tenetur</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //history -->
    <!-- //about -->

@endsection