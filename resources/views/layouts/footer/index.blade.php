<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>
                        {{__('translation.contact')}}
                    </h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>{{__('translation.address-details')}}
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:info@charaf-transport.com">info@charaf-transport.com</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+41 79 551 87 76">+41 79 551 87 76</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="social-list-2">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/100080472415763/posts/1134461884059963/?d=n&substory_index=1134461884059963" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/charaf_transport?igshid=YmMyMTA2M2Y=" class="twitter-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Nützliche Links
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="/">{{__('translation.home')}}</a>
                        </li>
                        <li>
                            <a href="/about">{{__('translation.about')}}</a>
                        </li>
                        <li>
                            <a href="/contact-us">{{__('translation.contact')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>Recent Posts</h4>
                    @php       $vehicles=\App\Vehicle::all()->sortByDesc('created_at')->slice(0, 3);@endphp

                    @foreach( $vehicles as $vehicle)
                        <div class="d-flex mb-4 recent-posts-box">
                            <a href="/vehicle-details/{{$vehicle->id}}">
                                <img class="flex-shrink-0 me-3" src="/{{  'storage/'.str_replace('\\', '/', json_decode($vehicle->images)[0]) }}" alt="small-car">
                            </a>
                            <div class="detail align-self-center">
                                <h5>
                                    <a href="/vehicle-details/{{$vehicle->id}}">{{$vehicle->name}}</a>
                                </h5>
                                <div class="listing-post-meta">
                                    CHF{{$vehicle->price}} | <i class="fa fa-calendar"></i> {{ date('F jS, Y', strtotime($vehicle->created_at))}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>{{__('translation.subscribe-now')}}</h4>
                    <div class="Subscribe-box">
                        <p>Wir sind darauf spezialisiert, Ihnen ein breites Spektrum an individuellen Dienstleistungen anzubieten. Egal ob Sie ein Fahrzeug verkaufen oder kaufen möchten. Unsere Dienstleistungen sollen Ihnen das Leben erleichtern. Ihre Bedürfnisse und unsere Expertise schaffen Kundennutzen. Darin sehen wir unsere Aufgabe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© 2022 CHARAF-TRANSPORT.COM  All rights reserved. designed by <a href="https://www.itvision.me">It Vision</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <div class="full-page-search-box">
        <form action="index.html#" class="search-boxs">
            <input class="search" type="search" value="" placeholder="type keyword(s) here"/>
            <button type="submit" class="btn btn-sm button-theme">Search</button>
        </form>
    </div>
</div>

<!-- Car Modal 2 -->
<div class="car-model-2">
    <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog" aria-labelledby="carOverviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="carOverviewModalLabel">
                        Find Your Dream Car
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row modal-raw">
                        <div class="col-lg-6 modal-left">
                            <div class="modal-left-content">
                                <div class="bs-example" data-example-id="carousel-with-captions">
                                    <div class="carousel slide" id="properties-carousel" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <iframe src="https://www.youtube.com/embed/V7IrnC9MISU" allowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 modal-right">
                            <div class="modal-right-content">
                                <section>
                                    <h3>Features</h3>
                                    <div class="features">
                                        <ul class="bullets">
                                            <li>Cruise Control</li>
                                            <li>Airbags</li>
                                            <li>Air Conditioning</li>
                                            <li>Alarm System</li>
                                            <li>Audio Interface</li>
                                            <li>CDR Audio</li>
                                            <li>Seat Heating</li>
                                            <li>ParkAssist</li>
                                        </ul>
                                    </div>
                                </section>
                                <section>
                                    <h3>Overview</h3>
                                    <dl>
                                        <dt>Model</dt>
                                        <dd>Audi</dd>
                                        <dt>Condition</dt>
                                        <dd>Brand New</dd>
                                        <dt>Year</dt>
                                        <dd>2020</dd>
                                        <dt>Price</dt>
                                        <dd>$178,000</dd>
                                    </dl>
                                </section>
                                <div class="dd">
                                    <div class="ratings-2">
                                        <span class="ratings-box">4.5/5</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>( 7 Reviews )</span>
                                    </div>
                                    <div class="btns">
                                        <a href="car-details.html" class="btn btn-md btn-round btn-theme">Show Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

