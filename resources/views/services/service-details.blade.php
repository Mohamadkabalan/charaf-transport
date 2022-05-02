@php
$page="services-details";
$lang=app()->getLocale();
$services=\App\Service::paginate(6);
@endphp
@extends('layouts.master')

@section('page_title')
    Services
@endsection

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{ __('translation.services-det')  }}</h2>
                        <ul>
                            <li>
                                <a href="/">{{ __('translation.home') }}</a>
                            </li>
                            <li>{{ __('translation.services-det') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Service details Area -->
    <div class="service-details ptb-100">
        <div class="container">
            <div class="service-details-image text-center">
                <img src="{{ asset( 'storage/'.str_replace('\\', '/', $service->image))  }}" alt="{{$service->title_de}}">
            </div>
            <div class="service-details-content text-center">
                <h3>@if($lang=='de') {{ $service->title_de }} @else {{ $service->title_ar }} @endif</h3>
                <p>@if($lang=='de') {{ $service->text_de }} @else {{ $service->text_ar }} @endif</p>
            </div>
        </div>
    </div>
    <!-- End Service details Area -->


@endsection

@push('scripts')
@endpush