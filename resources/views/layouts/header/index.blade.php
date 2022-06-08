<!-- Top header start -->
<header class="top-header" id="top-header-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-7">
                <div class="list-inline">
                    <a href="#"><i class="fa fa-map-marker"></i> 121 King Street, Melbourne</a>
                    <a href="mailto:info@charaf-transport.com" class="d-none-768"><i class="fa fa-envelope"></i>info@charaf-transport.com</a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header sticky-header header-with-top" id="main-header-4">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="header-left">
            <a class="navbar-brand logos" href="index.html">
                <img src="img/logos/logo.png" alt="logo">
            </a>
        </div>
        <button class="navbar-toggler" id="drawer" type="button">
            <span class="fa fa-bars"></span>
        </button>
        <div class="header-centar">
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown @if($page=='home') active @endif">
                        <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('translation.home') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown @if($page=='about') active @endif" >
                        <a class="nav-link dropdown-toggle" href="/about" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('translation.about') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown  @if($page=='contact-us') active @endif">
                        <a class="nav-link dropdown-toggle" href="/contact-us" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('translation.contact') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-right">
            <div class="contact-now">
{{--                <div class="left">
                    <i class="fa fa-phone"></i>
                </div>--}}
                <div class="right">
                    <h5>{{ __('translation.call-us') }}</h5>
                    <h4><a href="tel:+41795518776">+41 79 551 87 76</a></h4>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Main header end -->