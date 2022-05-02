@php $lang=app()->getLocale(); $page='services';  @endphp
@extends('layouts.master')

@section('page_title')
    Services
@endsection

@section('head')
@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{ __('translation.services')}}</h2>
                        <ul>
                            <li>
                                <a href="/">{{ __('translation.home')}}</a>
                            </li>
                            <li>{{ __('translation.services')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Services Area -->
    <section class="services-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('translation.specialized-services')}}</h2>
                <div class="bar"></div>
                <p>{{ __('translation.services-details')}}</p>
            </div>

            <div class="row" id="data-content" style="">
                @include('services.services-content')

            </div>
        </div>
    </section>
    <!-- End Services Area -->

@endsection

@push('scripts')
    <script>
        $(document).ready(function(){

            $(document).on('click', '.page-link', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                if(page){
                    fetch_data(page);
                }
            });

            function fetch_data(page)
            {
                $.ajax({
                    url:"/services/fetch_data?page="+page,
                    success:function(data)
                    {
                        $('#data-content').html(data);
                    }
                });
            }

        });
    </script>
@endpush