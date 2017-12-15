@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')
    <!--banner bottom-->
    <div class="about">
        <div class="col-md-6 about-left wow fadeInRight animated" data-wow-delay=".5s">
            <h3>welcome to Cloud Campus</h3>
            <p> Cloud Campus is an exceptional institution with a rich tradition.
                The students of this institution receive updated knowledge and make astonishing
                achievements in the HSC exam in Dhaka Board. Along with this education they
                acquire a cultural identity and disciplined life. Discipline is the lifeblood of
                Cloud Campus. After admission no student can smoke inside or around
                the campus and he will be punished immediately if he does so. No student can
                carry mobile phone in the college campus, no matter what the excuse is.
                If anyone is found carrying a mobile phone, it will be seized and his/her
                admission will be cancelled. Every student must carry the ID card issued by
                the authority. And no student is allowed in the college campus without the
                college uniform and the ID card.    </p>
        </div>
        <div class="col-md-6 about-right wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
                <div class="abt-icon">
                    <a href="#" class="hi-icon icon1"></a>
                    <h4>Hard work</h4>
                </div>
                <div class="abt-icon">
                    <a href="#" class="hi-icon icon2"></a>
                    <h4>Knowledge</h4>
                </div>
                <div class="abt-icon">
                    <a href="#" class="hi-icon icon3"></a>
                    <h4>Success</h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--//banner bottom-->
    <!--content-->
    <div class="content">
        <div class="container">
            <h3>Special care on students</h3>
            <div class="col-md-6 content-left wow fadeInLeft animated" data-wow-delay=".5s">
                <h4>Dreams comes true in our academy.</h4>
                <p> Cloud Campus primary vision is to plant the seed of professionalism amongst
                    its students to ensure they lead a successful life. IIT firmly believes
                    that people who act professionally, encourage their colleagues
                    and friends to conduct themselves in a manner that supports success.</p>
                <a href="{{asset('/about')}}" class="hvr-shutter-in-vertical button">More about us</a>
            </div>
            <div class="col-md-6 content-right wow fadeInRight animated" data-wow-delay=".5s">
                <div class="con-left text-center">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    <h5>Learning</h5>
                    <p>Most of the teachers are trained in Creative Questions Method including all course.</p>
                </div>
                <div class="con-left text-center">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    <h5>Competitions</h5>
                    <p>Awarded as the best College for twice by the People’s Republic of Bangladesh.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--//content-->
    <!--staff-->
    <div class="rooms">
        <div class="container">
            <h3>Our facilities</h3>
            <div class="col-md-4 room-left wow fadeInRight animated" data-wow-delay=".5s">
                <div id="accordion">
                    <h4>class rooms</h4>
                    <div class="faculty-list">
                        <ul>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Design and Development</a></li>
                            <li><a href="#">Porting and Optimization</a></li>
                            <li><a href="#">System integration</a></li>
                            <li><a href="#">Research</a></li>
                        </ul>
                    </div>
                    <h4>Hostels</h4>
                    <div class="faculty-list">
                        <ul>

                            <li><a href="#">Design and Development</a></li>
                            <li><a href="#">Porting and Optimization</a></li>
                            <li><a href="#">System integration</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Maintenance and Support</a></li>
                        </ul>
                    </div>
                    <h4>Best Food</h4>
                    <div class="faculty-list">
                        <ul>
                            <li><a href="#">Porting and Optimization</a></li>
                            <li><a href="#">System integration</a></li>
                            <li><a href="#">Maintenance and Support</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Design and Development</a></li>
                        </ul>
                    </div>
                    <h4>Guidance</h4>
                    <div class="faculty-list">
                        <ul>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Design and Development</a></li>
                            <li><a href="#">Porting and Optimization</a></li>
                            <li><a href="#">System integration</a></li>
                            <li><a href="#">Maintenance and Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 room-right wow fadeInLeft animated" data-wow-delay=".5s">
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Guidance</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Best faculty</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Seminars</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Class rooms</span></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="tab_img">
                                    <h4>For poor students</h4>
                                    <p>There is a dormitory with limited number of seats for the meritorious poor students. Study tours are organized in industrial establishments, banks, share markets and historical places all over the year according to the academic calendar. </p>
                                    <div class="fac-img">
                                        <img src="{{asset('/frontend')}}/images//f1.jpg" alt=" "/>
                                    </div>
                                    <div class="fac-img">
                                        <img src="{{asset('/frontend')}}/images//f2.jpg" alt=" "/>
                                    </div>
                                    <div class="fac-img">
                                        <img src="{{asset('/frontend')}}/images//f3.jpg" alt=" "/>
                                    </div>
                                    <div class="fac-img">
                                        <img src="{{asset('/frontend')}}/images//f4.jpg" alt=" "/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="tab_img">
                                    <div class="best-left">
                                        <h4>Best Faculty</h4>
                                        <p>There are 6 student advisors for taking care of the students' attendance and disciplinary
                                            issues. Besides, there is the
                                            guide teaching program and the guide teachers to take care of each student as  guardians.</p>
                                        <ul>
                                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Individual seat for each student</a></li>
                                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Access to a rich library</a></li>
                                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Modernized Computer lab</a></li>
                                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Completion of lessons within the class hours</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="tab_img">
                                    <div class="sem-left">
                                        <img src="{{asset('/frontend')}}/images//sem1.jpg" alt=" " />
                                    </div>
                                    <div class="sem-right">
                                        <img src="{{asset('/frontend')}}/images//sem2.jpg" alt=" " />
                                        <img src="{{asset('/frontend')}}/images//sem3.jpg" alt=" " />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                                <div class="tab_img">
                                    <div class="sem-right">
                                        <img src="{{asset('/frontend')}}/images//sem2.jpg" alt=" " />
                                        <img src="{{asset('/frontend')}}/images//sem3.jpg" alt=" " />
                                    </div>
                                    <div class="best-left sem-best">
                                        <h4>Environment</h4>
                                        <ul>
                                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">50-55 students per section</a></li>
                                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Individual seat for each student</a></li>
                                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Well equipped platoon of BNCC</a></li>
                                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Modernized Computer lab</a></li>
                                            <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Access to a rich library</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--//staff-->
    <!--footer-top-->
    <div id="faculty" class="footer-top wow fadeInLeft animated" data-wow-delay=".5s">
        <div class="container">
            <h3>Faculty</h3>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tabs-para tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <h5><span class="quote1"></span>The Faculty of Science started its journey with only three departments namely,
                            Physics, Mathematics and Chemistry. Over the years the Faculty has undergone significant changes.
                            New Departments have been established with the increase of the number of students and
                            subsequently new Faculties have been created to cater the needs of the new Departments..<span class="quote2"></span></h5>
                        <div class="team-right">
                            <div class="bar">
                                <p>Physics (99.9%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill1" style="width:98%"> </div>
                            </div>
                            <div class="bar">
                                <p>Mathematics (95%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill2" style="width:95%"> </div>
                            </div>
                            <div class="bar">
                                <p>Chemistry (80%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill3" style="width:80%"> </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tabs-para tab-pane fade" id="profile" aria-labelledby="profile-tab">
                        <h5><span class="quote1"></span>Established in 1921, the Faculty of Arts, one of the largest faculties of the university,
                            consists of sixteen Departments: Department of Bengali, Department of English, Department of History,
                            Department of Islamic History and Culture, Department of Philosophy, Department of Information Science
                            and Library Management, Department of Arabic, Department of Islamic Studies, Department of Sanskrit,
                            Department of Pali and Buddhist Studies, Department of Persian Language and Literature, Department of Urdu,
                            Department of Language Science,, Department of Theatre, Music, and Department of World Religions.
                            The academic activities of these departments are conducted by the Faculty of Arts.<span class="quote2"></span></h5>
                        <div class="team-right">
                            <div class="bar">
                                <p>Islamic History and Culture (99.9%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill1" style="width:98%"> </div>
                            </div>
                            <div class="bar">
                                <p>Department of English (95%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill2" style="width:95%"> </div>
                            </div>
                            <div class="bar">
                                <p>Arabic (80%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill3" style="width:80%"> </div>
                            </div>
                            <div class="bar">
                                <p>Sanskrit (45%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill4" style="width:45%"> </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tabs-para tab-pane fade" id="return" aria-labelledby="return-tab">
                        <h5><span class="quote1"></span>
                            This degree is designed in response to the growing importance of software
                            to the national infrastructure and the rapid rise in demand for professional
                            software engineers. The curriculum encompasses behavioral, managerial and technical
                            aspects of software engineering and attempts to synthesize disciplinary paradigms and themes.
                            This program is designed specifically for students interested in a range of application domains.
                            We have integrated real-world experiences via the cooperative education program and via team project software
                            development in course work. For more info explore BSSE Curriculum..<span class="quote2"></span></h5>
                        <div class="team-right">
                            <div class="bar">
                                <p>WordPress (99.9%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill1" style="width:98%"> </div>
                            </div>
                            <div class="bar">
                                <p>Python (95%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill2" style="width:95%"> </div>
                            </div>
                            <div class="bar">
                                <p>Adobe illustrator (80%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill3" style="width:80%"> </div>
                            </div>
                            <div class="bar">
                                <p>Content Development (45%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill4" style="width:45%"> </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tabs-para tab-pane fade" id="team4" aria-labelledby="team4-tab">
                        <h5><span class="quote1"></span>This degree is designed to give you an appreciation of
                            both hardware and software. As with all our degrees we support your learning through
                            the provision of a range of up-to-date computing and electronics laboratories. The first
                            two years of the course give you an introduction to modern computer systems. In the third
                            year you can take specialist courses from a range including Advanced Digital Design,
                            Computer Networks and Computer Architectures.
                            For more info explore BSc CSE Curriculum.<span class="quote2"></span></h5>
                        <div class="team-right">
                            <div class="bar">
                                <p>WordPress (99.9%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill1" style="width:98%"> </div>
                            </div>
                            <div class="bar">
                                <p>Python (95%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill2" style="width:95%"> </div>
                            </div>
                            <div class="bar">
                                <p>Adobe illustrator (80%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill3" style="width:80%"> </div>
                            </div>
                            <div class="bar">
                                <p>Content Development (45%)</p>
                            </div>
                            <div class="skills">
                                <div class="skill4" style="width:45%"> </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <ul id="myTab" class="nav nav-tabs text-center" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="{{asset('/frontend')}}/images//jasim.jpg" alt=" " /></a></li>
                    <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="{{asset('/frontend')}}/images//jahid.jpg" alt=" " /></a></li>
                    <li role="presentation"><a href="#return" role="tab" id="return-tab" data-toggle="tab" aria-controls="return"><img src="{{asset('/frontend')}}/images//robin.jpg" alt=" " /></a></li>
                    <li role="presentation"><a href="#team4" role="tab" id="team4-tab" data-toggle="tab" aria-controls="team4"><img src="{{asset('/frontend')}}/images//arafat.jpg" alt=" " /></a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
    </div>

@endsection