@extends('frontend.master')
@section('title')
    Course
@endsection
@section('content')

    <!-- courses -->
    <div class="courses_box1">
        <div class="container">
            <h3 class="tittle">Courses</h3>

            <div class="col-md-9 wow fadeInUp animated" data-wow-delay=".5s">
                <div class="course_list">
                    <div class="table-header clearfix">
                        <div class="id_col">ID</div>
                        <div class="name_col">Course Name</div>
                        <div class="duration_col">Duration</div>
                        <div class="date_col">Start Date</div>
                    </div>
                    <ul class="table-list">
                        @foreach($courses as $cours)
                            <li class="clearfix">
                                <div class="id_col">{{ $cours->course_code }}</div>

                                <div class="name_col"><a href="single.html">{{ $cours->course_name }}</a></div>

                                <div class="duration_col">{{ $cours->course_duration }}</div>

                                <div class="date_col">{{ $cours->course_start_date}}</div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="courses_box1-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <form>
                        <div class="select-block1">
                            <select>
                                <option value="">Select One</option>
                                @foreach($courses as $cours)
                                    <option value="{{ $cours->course_name }}">{{ $cours->course_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- select-block -->
                        <div class="select-block1">
                            <select>
                                <option value="">Select One</option>
                                @foreach($courses as $cours)
                                    <option value="{{ $cours->course_duration }}">{{ $cours->course_duration }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- select-block -->
                        <input type="submit" value="search" class="course-submit">
                    </form>
                </div>
                <div class="personBox wow fadeInLeft animated" data-wow-delay=".5s">
                    <div class="personBox_1">
                        <div class="person_image">
                            <img src="images/team1.jpg" class="img-responsive" alt=""/>
                        </div>
                        <div class="person_image_desc">
                            <h1>Cloud Campus</h1>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="person_description">

                    </div>
                </div>
                <ul class="posts wow fadeInLeft animated" data-wow-delay=".5s">
                    <h3>Recent Posts</h3>

                    <li>
                        <article class="entry-item">
                            <div class="entry-thumb pull-left">
                                <img src="images/team2.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="entry-content">
                                <h6><a href="#">Established</a></h6>
                                <p><a href="#">Admin</a> &nbsp;/&nbsp; 30 Dec 2015</p>
                            </div>
                            <div class="clearfix"> </div>
                        </article>
                    </li>



                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection