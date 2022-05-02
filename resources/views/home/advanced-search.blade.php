@php $manufacturers = \App\Brand::all();@endphp
@php $years = \App\Year::all();@endphp
@php $locations = \App\Location::all();@endphp
@php $vehicles = \App\Vehicle::paginate(6);@endphp

<!-- Search box 3 start -->
<div class="search-box-3">
    <div class="container">
        <form id="advanced-search-form">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select required class="form-select" name="manufacturer" id="manufacturer">
                            <option data-id="" value="">Select Manufacturer</option>
                        @foreach($manufacturers as $key => $manufacturer)
                            <option data-id="{{$manufacturer->id}}" value="{{$manufacturer->name}}">{{$manufacturer->name}}</option>
                        @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select required class="form-select" name="model" id="model">
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select required class="form-select" name="location" id="location">
                            <option value="">Select Location</option>
                            @foreach($locations as $key => $location)
                                <option value="{{$location->name}}">{{$location->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select  class="form-select" name="year" id="year">
                            <option value="">Select Year</option>
                            @foreach($years as $key => $year)
                            <option value="{{$year->name}}">{{$year->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="form-select" name="condition" id="condition">
                            <option value="used">Used</option>
                            <option value="new">New</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <select class="form-select" name="transmission" id="transmission">
                            <option value="manual" >Manual</option>
                            <option value="amt" >Automated manual (AMT)</option>
                            <option value="automatic" >Automatic</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <div class="range-slider">
                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="form-group">
                        <button type="submit" class="btn w-100 button-theme btn-md">
                            <i class="fa fa-search"></i>Find
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="row" id="data-content">
            @include('home.advanced-search-content')
        </div>
    </div>
</div>
<!-- Search box 3 end -->
@push('scripts')
<script>
    $( document ).ready(function() {

        $(document).on('change', '#manufacturer', function () {
            const manufacturer_id = $('#manufacturer').find(':selected').data('id');

            if (manufacturer_id) {
                $.ajax({
                    url: "/get-models",
                    method: "GET",
                    dataType: "json",
                    data: {manufacturer_id: manufacturer_id},
                    success: function (data) {
                        if (data.status == 200) {
                            $('#model').find('option').remove().end();
                            for (let i = 0; i < data.models.length; i++) {
                                $("#model").append(new Option(data.models[i].name, data.models[i].name));
                            }
                        }
                    }
                })
            }
        });
        $(document).on('submit', '#advanced-search-form', function (e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                type: "GET",
                url: "/advanced-search",
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    $('#data-content').html(data);
                }
            });
        });

        $(document).on('click', '.page-link', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            if (page) {
                fetch_data(page);
            }
        });
        const advancedSearchForm= $('#advanced-search-form')
        function fetch_data(page) {
            $.ajax({
                type: "GET",
                url: "/advanced-search?page=" + page,
                data: advancedSearchForm.serialize(),
                success: function (data) {
                    $('#data-content').html(data);
                }
            });
        }

    });
</script>
@endpush