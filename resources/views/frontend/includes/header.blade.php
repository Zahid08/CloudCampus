<div class="header-nav">
    <div class="logo wow fadeInUp animated" data-wow-delay=".5s">
        <h1>
            <a class="link link--kumya" href="{{url('/')}}"><i></i><span data-letters="C CAMPUS">C CAMPUS</span></a>
        </h1>
    </div>
    <div class="top-nav wow fadeInUp animated" data-wow-delay=".5s">
        <label class="mobile_menu" for="mobile_menu">
            <span>Menu</span>
        </label>
        <input id="mobile_menu" type="checkbox">
        <ul class="nav">
            <li><a class="active" href="{{url('/')}}">home</a></li>
            <li><a href="{{asset('/about')}}">about</a></li>

            <li><a href="{{url('/')}}">Academics</a>
                <ul>
                    <li><a href="{{asset('/service')}}">Service</a></li>
                    <li><a href="{{asset('/staff')}}">Teacher and staff</a></li>
                    <li><a href="{{asset('/notice')}}">Notice</a></li>
                    <li><a href="{{asset('/message')}}">Messages</a></li>
                </ul>
            </li>

            <li><a href="{{asset('/course')}}">COURSE</a></li>
            <li><a href="{{asset('/blog')}}">BLOG</a></li>
            <li><a href="{{asset('/gallery')}}">GALLERY</a></li>
            <li><a href="{{asset('/contact')}}">CONTACT</a></li>
            <li><a href="{{asset('/login')}}">Login</a></li>
            <li><a href="{{asset('/register')}}">Register</a></li>

        </ul>
    </div>
    <div class="clearfix"></div>

</div>



