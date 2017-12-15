@extends('frontend.master')
@section('title')
    Contact
@endsection
@section('content')

    <div class="contact">
        <div class="container">
            <h3 class="tittle">View On map</h3>
            <div class="map wow fadeInUp animated" data-wow-delay=".5s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
            </div>
            <h3 class="tittle">Contact</h3>
            <div class="contact-grids">
                <div class="col-md-3 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <div class="call ">
                        <div class="col-xs-3 contact-grdl">
                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 contact-grdr">
                            <ul>
                                <li>+88 015 51817721</li>
                                <li>+88 017 41174838</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="call">
                        <div class="col-xs-3 contact-grdl">
                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 contact-grdr">
                            <ul>
                                <li>BDBL Bhabon, Kawran Bazar</li>
                                <li>Dhaka.</li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="call">
                        <div class="col-xs-3 contact-grdl">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        </div>
                        <div class="col-xs-9 contact-grdr">
                            <ul>
                                <li><a href="mailto:info@example.com">info@c-campus.com</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-5 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ url('/save-guest-message') }}">
                        {{ csrf_field() }}
                        <input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                        <input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <textarea type="text" name="user_message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>

                        <input type="submit" value="Send" >
                    </form>
                </div>
                <div class="col-md-4 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <div class="newsletter">
                        <h3><span></span>Newsletter</h3>
                    </div>
                    <form>
                        <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <input type="submit" value="Subscribe" >
                    </form>
                </div>
                <div class="clearfix"> </div>

            </div>
        </div>
    </div>

@endsection