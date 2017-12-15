<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Eduma Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('/frontend')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('/frontend')}}/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('/frontend')}}/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="{{asset('/frontend')}}/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="{{asset('/frontend')}}/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- dropdown -->
<script src="{{asset('/frontend')}}/js/jquery.easydropdown.js"></script>
<!-- //dropdown -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('/frontend')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{asset('/frontend')}}/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- accordian -->
<link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery-ui.css">
<script src="{{asset('/frontend')}}/js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#accordion" ).accordion();
    });
</script>
<!-- //accordian -->
<!-- tabs -->
<script src="{{asset('/frontend')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<!-- //tabs -->
<!--animate-->
<link href="{{asset('/frontend')}}/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('/frontend')}}/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!--//end-animate-->