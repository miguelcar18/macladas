<!DOCTYPE html>
    <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
    <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        @section('titulo')
        <title>Inicio | Macladas - Ingenieros consultores</title>
        @show
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/logo/icon.png') }}">

        <!-- Web Fonts -->
        <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- CSS Header and Footer -->
        <link rel="stylesheet" href="{{ asset('assets/css/headers/header-v6.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/footers/footer-v1.css') }}">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/line-icons/line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/line-icons-pro/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings.css') }}" type="text/css" media="screen">
        <!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css') }}" type="text/css" media="screen"><![endif]-->

        <!-- CSS Theme -->
        <link rel="stylesheet" href="{{ asset('assets/css/theme-colors/dark-red.css') }}" id="style_color">
        <link rel="stylesheet" href="{{ asset('assets/css/theme-skins/dark.css') }}">
        <!-- CSS Customization -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

        @section('estilos')
        @show

    </head>
    <body class="header-fixed">
        <div class="wrapper">
            @include('front.layouts.header')
            @include('front.layouts.slider')
            @section('contenido')
                @include('front.layouts.servicesResumen')
                @include('front.layouts.aboutUs')
                @include('front.layouts.services')
                {{--
                @include('front.layouts.recentWorks')
                @include('front.layouts.portfolio')
                --}}
                @include('front.layouts.clients')
            @show
            @include('front.layouts.footer')
        </div><!--/wrapper-->

        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- JS Implementing Plugins -->
        <script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/smoothScroll.js') }}"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyALo2iAW7U4VIN3Qja94uDhkmyf6sCa2xk&sensor=true"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/gmap/gmap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery.parallax.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
        <!-- JS Customization -->
        <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
        <!-- JS Page Level -->
        <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/fancy-box.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/owl-carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/revolution-slider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/pages/page_contacts.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/style-switcher.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/pages/page_contact_advanced.js') }}"></script>
        
        @section('javascripts')
        @show
        
        <script type="text/javascript">
            jQuery(document).ready(function() {
                App.init();
                //ContactPage.initMap();
                RevolutionSlider.initRSfullScreenOffset();
                //PageContactForm.initPageContactForm();
                App.initParallaxBg();
                FancyBox.initFancybox();
                OwlCarousel.initOwlCarousel();
                StyleSwitcher.initStyleSwitcher();
            });
        </script>
        <!--[if lt IE 9]>
        <script src="{{ asset('assets/plugins/respond.js') }}"></script>
        <script src="{{ asset('assets/plugins/html5shiv.js') }}"></script>
        <script src="{{ asset('assets/plugins/placeholder-IE-fixes.js') }}"></script>
        <![endif]-->

    </body>
</html>