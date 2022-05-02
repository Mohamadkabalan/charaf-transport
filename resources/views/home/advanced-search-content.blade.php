@if(isset($vehicles))
    @foreach($vehicles as $vehicle)
        <div class="col-lg-4 col-md-6">
            <div class="car-box-3">
                <div class="car-thumbnail">
                    <a href="/vehicle-details/{{$vehicle->id}}" class="car-img">

                        <div class="price-box-2"><sup>CHF</sup>{{$vehicle->price}}</div>
                        <img class="d-block w-100" src="{{  'storage/'.str_replace('\\', '/', json_decode($vehicle->images)[0]) }}" alt="car">
                    </a>
                    <div class="carbox-overlap-wrapper">
                        <div class="overlap-box">
                            <div class="overlap-btns-area">
                                <div class="car-magnify-gallery">
                                    @foreach(json_decode($vehicle->images) as $key => $image)
                                    <a href="{{  'storage/'.str_replace('\\', '/', json_decode($vehicle->images)[$key]) }}"  class="@if($key==0) overlap-btn @endif"  data-sub-html="<h4>{{$vehicle->name}}</h4><p>{{$vehicle->description}}</p>">
                                        @if($key==0)
                                            <i class="fa fa-expand"></i>
                                        @endif
                                        <img class="hidden" src="{{  'storage/'.str_replace('\\', '/', json_decode($vehicle->images)[$key]) }}" alt="hidden-img">
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail">
                    <h1 class="title">
                        <a href="/vehicle-details/{{$vehicle->id}}">{{$vehicle->name}}</a>
                    </h1>
                    <div class="location">
                        <a href="/vehicle-details/{{$vehicle->id}}">
                            <i class="flaticon-pin"></i>{{$vehicle->location}},
                        </a>
                    </div>
                    <ul class="facilities-list clearfix">
                        <li>
                            <i class="flaticon-way"></i> {{$vehicle->mileage}} km
                        </li>
                        <li>
                            <i class="flaticon-manual-transmission"></i> {{$vehicle->transmission}}
                        </li>
                        <li>
                            <i class="flaticon-calendar-1"></i> {{$vehicle->year}}
                        </li>
                        <li>
                            <i class="flaticon-fuel"></i> {{$vehicle->fuel_type}}
                        </li>
                        <li>
                            <i class="flaticon-car"></i> {{$vehicle->engine}}
                        </li>
                        <li>
                            <i class="flaticon-gear"></i> {{$vehicle->color}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endforeach
<div class="col-lg-12 col-md-12 text-center">
    <div class="d-flex justify-content-center pagination-area">
        {!! $vehicles->links() !!}
    </div>
</div>
@endif