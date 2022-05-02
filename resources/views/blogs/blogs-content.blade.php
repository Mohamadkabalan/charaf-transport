@php $lang=app()->getLocale(); $page='blogs';  @endphp
@foreach($data as $row)
    <div class="col-lg-4 col-md-6">
        <div class="single-services">
            <div class="services-image">
                <img src="{{ asset( 'storage/'.str_replace('\\', '/', $row->image)) }}" alt="{{$row->title_de}}">
            </div>

            <div class="services-content">
                <h3>
                    @if($lang=='de') {{$row->title_de}} @else {{$row->title_ar}}  @endif
                </h3>
                <p>@if($lang=='de') {{  substr($row->text_de, 0, 100) }} @else  {{ substr($row->text_ar, 0, 100) }}   @endif</p>
            </div>
        </div>
    </div>
@endforeach
<div class="col-lg-12 col-md-12 text-center">
    <div class="d-flex justify-content-center pagination-area">
        {!! $data->links() !!}
    </div>
</div>