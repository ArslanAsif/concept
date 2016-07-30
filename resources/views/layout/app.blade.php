<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Concept - Design-Driven Bootstrap HTML5 Template</title>

    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="apple-touch-180x180.png">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- MT ICONS FONT -->
    <link rel="stylesheet" href="{{ url('assets/fonts/mt-icons/mt-icons.css') }}">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fancybox/jquery.fancybox.css') }}">

    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" href="{{ url('assets/plugins/revolutionslider/css/settings.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/revolutionslider/css/layers.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/revolutionslider/css/navigation.css') }}">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="{{ url('assets/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/owl-carousel/owl.transitions.css') }}">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="{{ url('assets/plugins/ytplayer/css/jquery.mb.YTPlayer.min.css') }}">

    <!-- NOUISLIDER -->
    <link rel="stylesheet" href="{{ url('assets/plugins/nouislider/nouislider.min.css') }}">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/animations/animate.min.css') }}">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/pages-style.css') }}">

    <!-- STYLE SWITCHER -->
    <link rel="stylesheet" href="{{ url('assets/plugins/theme-options/theme-options.css') }}">

    <!-- ALTERNATIVE STYLES -->
    <link rel="stylesheet" href="#" data-style="styles">


</head>

<body>

<div id="main-container">

    @include('includes.header')

    @yield('content')

    @include('includes.footer')

</div><!-- MAIN CONTAINER -->


<!-- GO TOP -->
<a id="scroll-up"><i class="mt-icon-arrow-up-2"></i></a>


<!-- STYLE SWITCHER -->
<div id="theme-options"></div>


<!-- jQUERY -->
<script src="{{ url('assets/plugins/jquery/jquery-2.1.4.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- VIEWPORT -->
<script src="{{ url('assets/plugins/viewport/jquery.viewport.js') }}"></script>

<!-- MENU -->
<script src="{{ url('assets/plugins/menu/hoverIntent.js') }}"></script>
<script src="{{ url('assets/plugins/menu/superfish.js') }}"></script>

<!-- FANCYBOX -->
<script src="{{ url('assets/plugins/fancybox/jquery.fancybox.pack.js') }}"></script>

<!-- REVOLUTION SLIDER -->
<script src="{{ url('assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ url('assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- OWL Carousel -->
<script src="{{ url('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>

<!-- PARALLAX -->
<script src="{{ url('assets/plugins/parallax/jquery.stellar.min.js') }}"></script>

<!-- ISOTOPE -->
<script src="{{ url('assets/plugins/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ url('assets/plugins/isotope/isotope.pkgd.min.js') }}"></script>

<!-- PLACEHOLDER -->
<script src="{{ url('assets/plugins/placeholders/jquery.placeholder.min.js') }}"></script>

<!-- CONTACT FORM VALIDATE & SUBMIT -->
<script src="{{ url('assets/plugins/validate/jquery.validate.min.js') }}"></script>
<script src="{{ url('assets/plugins/submit/jquery.form.min.js') }}"></script>

<!-- GOOGLE MAPS -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ url('assets/plugins/googlemaps/gmap3.min.js') }}"></script>

<!-- CHARTS -->
<script src="{{ url('assets/plugins/charts/jquery.easypiechart.min.js') }}"></script>

<!-- COUNTER -->
<script src="{{ url('assets/plugins/counter/jQuerySimpleCounter.js') }}"></script>

<!-- YOUTUBE PLAYER -->
<script src="{{ url('assets/plugins/ytplayer/jquery.mb.YTPlayer.min.js') }}"></script>

<!-- INSTAFEED -->
<script src="{{ url('assets/plugins/instafeed/instafeed.min.js') }}"></script>

<!-- NOUISLIDER -->
<script src="{{ url('assets/assetsplugins/nouislider/nouislider.min.js') }}"></script>

<!-- ANIMATIONS -->
<script src="{{ url('assets/plugins/animations/wow.min.js') }}"></script>

<!-- COUNTDOWN -->
<script src="{{ url('assets/plugins/countdown/jquery.countdown.min.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ url('assets/js/custom.js') }}"></script>

<!-- STYLE SWITCHER -->
<script src="{{ url('assets/plugins/theme-options/jquery.cookie.js') }}"></script>
<script src="{{ url('assets/plugins/theme-options/theme-options.js') }}"></script>

</body>


<!-- Mirrored from milothemes.com/concept/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 07:08:56 GMT -->
</html>
