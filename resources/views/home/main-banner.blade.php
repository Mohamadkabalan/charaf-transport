@php $banners = \App\Banner::all();@endphp
@if($banners)
<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner banner-slider-inner">
            @foreach($banners as $key => $banner)
            <div class="carousel-item banner-max-height item-bg @if($key==0) active @endif">
                <img class="d-block w-100 h-100" src="{{ 'storage/'.str_replace('\\', '/', $banner->image) }}" alt="banner">
                <div class="carousel-content banner-info-2 bi-2">
                    <h1>{{$banner->title}}</h1>
                    <p>{{$banner->text}}</p>
                </div>
            </div>
            @endforeach
        </div>
        @if(sizeof($banners) > 1)
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        @endif
    </div>
</div>
<!-- Banner end -->
@endif
