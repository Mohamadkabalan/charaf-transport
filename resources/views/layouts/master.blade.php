@php $lang=app()->getLocale(); @endphp
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <!-- External CSS libraries -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-submenu.css')  }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css')  }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/leaflet.css')  }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/map.css') }}" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css')  }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('fonts/bootstrap-icons/bootstrap-icons.css')  }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons/style.css')  }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/jquery.mCustomScrollbar.css')  }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/dropzone.css')  }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/lightbox.min.css') }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/jnoty.css') }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('css/slick.css') }}">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/initial.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('css/skins/midnight-blue.css')}}">

        <!-- Google fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=OSans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script  src="{{ asset('js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
        <script  src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script  src="{{ asset('js/html5shiv.min.js') }}"></script>
        <script  src="{{ asset('js/respond.min.js')  }}"></script>
        <![endif]-->


        <title>CHARAF-TRANSPORT |
        @hasSection('page_title')
        @yield('page_title')
        @endif
        </title>

        <link rel="alternate" hreflang="en" href="https://charaf-transport.com/">
        <link rel="alternate" hreflang="ar" href="https://charaf-transport.com/">
        <link rel="canonical" href="https://charaf-transport.com/">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Home - charaf-transport">
        <meta property="og:description" content="Charaf-transport.com is the leading used truck dealer in Switzerland and specializes in the purchase and sale of occasional and used trucks.">
        <meta property="og:url" content="https://charaf-transport.com/">
        <meta property="og:site_name" content="charaf-transport">
        <meta property="article:modified_time" content="2021-10-21T09:37:54+00:00">
        <meta property="og:image" content="https://www.arztpraxiskadir.ch/images/arztpraxiskadir.png">

        @yield('head')

        @section('seo')

        @show

        @stack('css')

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')  }}">
        <!-- Google Tag Manager -->

        <!-- End Google Tag Manager -->
    </head>

<body>
<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->

    <div class="page_loader"></div>
    @include('layouts.header.index')

    @yield('content-wrapper')


    @section('footer')

    @include('layouts.footer.index')

    <script src="{{ asset('js/jquery.min.js')  }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')  }}"></script>
    <script  src="{{ asset('js/bootstrap-submenu.js')  }}"></script>
    <script  src="{{ asset('js/rangeslider.js') }}"></script>
    <script  src="{{ asset('js/jquery.mb.YTPlayer.js')  }}"></script>
    <script  src="{{ asset('js/bootstrap-select.min.js')  }}"></script>
    <script  src="{{ asset('js/jquery.easing.1.3.js')  }}"></script>
    <script  src="{{ asset('js/jquery.scrollUp.js') }}"></script>
    <script  src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')  }}"></script>
    <script  src="{{ asset('js/leaflet.js') }}"></script>
    <script  src="{{ asset('js/leaflet-providers.js')  }}"></script>
    <script  src="{{ asset('js/leaflet.markercluster.js')  }}"></script>
    <script  src="{{ asset('js/dropzone.js')  }}"></script>
    <script  src="{{ asset('js/slick.min.js')  }}"></script>
    <script  src="{{ asset('js/slick.min.js')  }}"></script>
    <script  src="{{ asset('js/jquery.filterizr.js')  }}"></script>
    <script  src="{{ asset('js/jquery.magnific-popup.min.js')  }}"></script>
    <script  src="{{ asset('js/jquery.countdown.js')  }}"></script>
    <script  src="{{ asset('js/jquery.mousewheel.min.js')  }}"></script>
    <script  src="{{ asset('js/lightgallery-all.js')  }}"></script>
    <script  src="{{ asset('js/jnoty.js')  }}"></script>
    <script  src="{{ asset('js/maps.js')  }}"></script>
    <script  src="{{ asset('js/sidebar.js') }}"></script>
    <script  src="{{ asset('js/app.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script  src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
    <!-- Custom javascript -->
    <script  src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>

    @show
    @stack('scripts')
</body>

</html>