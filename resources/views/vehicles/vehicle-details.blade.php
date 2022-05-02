@php $lang=app()->getLocale(); $page='home';  @endphp
@extends('layouts.master')

@section('page_title')
    Vehicle Details
@endsection

@section('head')

@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    <!-- Sub banner start -->

    <div class="container pt-15">
    </div>
    <!-- Sub Banner end -->

    <!-- Car details page start -->
    <div class="car-details-page content-area-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="car-details-section">
                        <!-- Cardetailsslider 2 start -->
                        <div class="cardetailsslider-2 mb-40">
                            <div class="main clearfix">
                                <div class="slider slider-fors">
                                    @foreach(json_decode($vehicle->images) as $key => $image)
                                    <div class="slider-slider-for-photo"><img src="/{{  'storage/'.str_replace('\\', '/', json_decode($vehicle->images)[$key]) }}" class="img-fluid w-100" alt="slider-car"></div>
                                    @endforeach
                                </div>
                                <div class="slider-navs-box">
                                    <div class="slider slider-navs">
                                        @foreach(json_decode($vehicle->images) as $key => $image)
                                        <div><img src="/{{  'storage/'.str_replace('\\', '/', json_decode($vehicle->images)[$key]) }}" class="slider-photo" alt="slider-car"></div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="heading-car-2">
                                    <div class="pull-left">
                                        <h3>{{$vehicle->name}} </h3>
                                        <p>
                                            <i class="flaticon-pin"></i> {{$vehicle->location}}
                                        </p>
                                    </div>

                                    <div class="pull-right">
                                        <div class="price-box-3"><sup>CHF</sup>{{$vehicle->price}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Advanced search start -->
                        <div class="widget-2 advanced-search bg-grea-2 d-lg-none d-xl-none">
                            <h3 class="sidebar-title">Booking This Car</h3>
                            <ul>
                                @if($vehicle->brand)
                                <li>
                                    <span>Make</span>{{$vehicle->brand}}
                                </li>
                                @endif
                                @if($vehicle->model)
                                <li>
                                    <span>Model</span>{{$vehicle->model}}
                                </li>
                                @endif
                                @if($vehicle->body_style)
                                <li>
                                    <span>Body Style</span>{{$vehicle->body_style}}
                                </li>
                                @endif
                                @if($vehicle->year)
                                <li>
                                    <span>Year</span>{{$vehicle->year}}
                                </li>
                                @endif
                                @if($vehicle->condition)
                                <li>
                                    <span>Condition</span>{{$vehicle->condition}}
                                </li>
                                @endif
                                @if($vehicle->mileage)
                                <li>
                                    <span>Mileage</span>{{$vehicle->mileage}} mi
                                </li>
                                @endif
                                @if($vehicle->interior_color)
                                <li>
                                    <span>Interior Color</span>{{$vehicle->interior_color}}
                                </li>
                                @endif
                                @if($vehicle->transmission)
                                <li>
                                    <span>Transmission</span>{{$vehicle->transmission}}
                                </li>
                                @endif
                                @if($vehicle->engine)
                                <li>
                                    <span>Engine</span>{{$vehicle->engine}}
                                </li>
                                @endif
                                @if($vehicle->fuel_type)
                                <li>
                                    <span>Fuel Type</span>{{$vehicle->fuel_type}}
                                </li>
                                @endif
                            </ul>
                        </div>
                        <!-- Tabbing box start -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-right">
                        <!-- Advanced search start -->
                        <div class="widget advanced-search d-none d-xl-block d-lg-block">
                            <h3 class="sidebar-title">Booking This Vehicle</h3>
                            <ul>
                                @if($vehicle->brand)
                                    <li>
                                        <span>Make</span>{{$vehicle->brand}}
                                    </li>
                                @endif
                                @if($vehicle->model)
                                    <li>
                                        <span>Model</span>{{$vehicle->model}}
                                    </li>
                                @endif
                                @if($vehicle->body_style)
                                    <li>
                                        <span>Body Style</span>{{$vehicle->body_style}}
                                    </li>
                                @endif
                                @if($vehicle->year)
                                    <li>
                                        <span>Year</span>{{$vehicle->year}}
                                    </li>
                                @endif
                                @if($vehicle->condition)
                                    <li>
                                        <span>Condition</span>{{$vehicle->condition}}
                                    </li>
                                @endif
                                @if($vehicle->mileage)
                                    <li>
                                        <span>Mileage</span>{{$vehicle->mileage}} mi
                                    </li>
                                @endif
                                @if($vehicle->interior_color)
                                    <li>
                                        <span>Interior Color</span>{{$vehicle->interior_color}}
                                    </li>
                                @endif
                                @if($vehicle->transmission)
                                    <li>
                                        <span>Transmission</span>{{$vehicle->transmission}}
                                    </li>
                                @endif
                                @if($vehicle->engine)
                                    <li>
                                        <span>Engine</span>{{$vehicle->engine}}
                                    </li>
                                @endif
                                @if($vehicle->fuel_type)
                                    <li>
                                        <span>Fuel Type</span>{{$vehicle->fuel_type}}
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Car details page end -->

@endsection