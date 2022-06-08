@php $lang=app()->getLocale(); $page='contact-us';  @endphp
@extends('layouts.master')

@section('page_title')
    Contact Us
@endsection

@section('head')

@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>{{ __('translation.home') }}</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">{{ __('translation.home') }}</a></li>
                    <li class="active">{{ __('translation.contact')  }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Contact 1 start -->
    <div class="contact-1 content-area-5">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1 class="mb-10">{{ __('translation.get-in-touch') }}</h1>
                <div class="title-border">
                    <div class="title-border-inner"></div>
                    <div class="title-border-inner"></div>
                    <div class="title-border-inner"></div>
                    <div class="title-border-inner"></div>
                    <div class="title-border-inner"></div>
                </div>
            </div>
            <div class="bg-white">
                <div class="row g-0">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-pad2">
                        <!-- Contact form start -->
                        <div class="contact-form contact-pad">
                            <h3>{{__('translation.send-message')}}</h3>
                            <form id="contact_form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group name">
                                            <input type="text" name="name" class="form-control" placeholder="{{__('translation.name')}}"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group email">
                                            <input type="email" name="email" class="form-control" placeholder="{{__('translation.email')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="form-control" placeholder="{{__('translation.your-subject')}}"   required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="form-control" placeholder="{{__('translation.phone')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group message">
                                            <textarea  class="form-control" name="message" placeholder="{{__('translation.your-message')}}" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p id="msgSubmit"></p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send-btn text-center">
                                            <button type="submit" class="btn-6">{{__('translation.send-message')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact form end -->
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-pad2">
                        <!-- Contact details start -->
                        <div class="contact-details">
                            <div class="ci-box d-flex">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="detail align-self-center">
                                    <h4>{{ __('translation.address')  }}</h4>
                                    <p>{{__('translation.address-details')}}</p>
                                </div>
                            </div>
                            <div class="ci-box d-flex">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="detail align-self-center">
                                    <h4>{{__('translation.phone')}}</h4>
                                    <p>
                                        <a href="tel:+41795518776">+41 79 551 87 76</a>
                                    </p>
                                </div>
                            </div>
                            <div class="ci-box d-flex">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="detail align-self-center">
                                    <h4>{{__('translation.address')}}</h4>
                                    <p>
                                        <a href="mailto:info@charaf-transport.com">info@charaf-transport.com</a>
                                    </p>
                                </div>
                            </div>
                            <h3>{{ __('translation.follow-us')  }}</h3>
                            <ul class="social-list clearfix">
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/100080472415763/posts/1134461884059963/?d=n&substory_index=1134461884059963" class="facebook-bg">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://instagram.com/charaf_transport?igshid=YmMyMTA2M2Y=" class="facebook-bg">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- Contact details end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact 1 end -->

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('submit','#contact_form',function(e){
                e.preventDefault();
                // you must call this early before the AJAX takes place.
                $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                $.ajax({
                    url: "/contact/create",
                    method: "POST",
                    data : $('#contact_form').serialize(),
                    success: function (data) {
                        if(data.status==200){
                            $('#contact_form')[0].reset();
                            $('#msgSubmit').html(data.message);
                        }
                    }
                });
            });
        });
    </script>
@endpush
