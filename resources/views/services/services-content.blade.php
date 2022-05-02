@php $lang=app()->getLocale(); $page='services';  @endphp
<div class="about-content">
<ul class="about-list">
@foreach($data as $row)
        <li>
            <i class="flaticon-checked"></i>
            @if($lang=='de') {{$row->title_de}} @else {{$row->title_ar}}  @endif
        </li>
@endforeach
</ul>
</div>
{{--
<div class="col-lg-12 col-md-12 text-center">
    <div class="d-flex justify-content-center pagination-area">
        {!! $data->links() !!}
    </div>
</div>--}}
