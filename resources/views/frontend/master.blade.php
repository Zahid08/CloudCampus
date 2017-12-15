<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
   @include('frontend.includes.link')
</head>
<body>

<div data-vide-bg="{{asset('/frontend')}}/video/training">
    <div class="center-container">
        <div class="ban-shade">
           @include('frontend.includes.header')
            @include('frontend.includes.slider')
        </div>
    </div>
</div>

@include('frontend.includes.videolink')

@yield('content')

@include('frontend.includes.footer')
@include('frontend.includes.login')

<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script src="{{asset('/frontend')}}/js/bootstrap.js"></script>
</body>
</html>