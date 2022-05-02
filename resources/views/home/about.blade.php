@php $about = \App\About::first();  @endphp
<!-- Start About Area -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>{{__('translation.about')}}</h1>
            <ul class="breadcrumbs">
                <li><a href="/">{{__('translation.home')}}</a></li>
                <li class="active">{{__('translation.about')}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- About car start -->
<div class="about-car content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="about-slider-box simple-slider">
                    <img class="d-block w-100" src="img/car/car-12.png" alt="about">
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 align-self-center">
                <div class="about-text">
                    <!-- Main title -->
                    <div class="main-title">
                        <h1 class="mb-10">{{ __('translation.about-title')  }}</h1>
                        <div class="title-border">
                            <div class="title-border-inner"></div>
                            <div class="title-border-inner"></div>
                            <div class="title-border-inner"></div>
                            <div class="title-border-inner"></div>
                            <div class="title-border-inner"></div>
                        </div>
                    </div>
                    <p>{{ __('translation.about-text') }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About car end -->
  @include('home.advantages')
  @include('home.team')

<!-- End About Area -->
