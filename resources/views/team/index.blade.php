@php
    $teams=\App\Team::all();
@endphp
<!-- Our team start -->
<div class="our-team content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1 class="mb-10">{{__('translation.team')}}</h1>
            <div class="title-border">
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
                <div class="title-border-inner"></div>
            </div>
        </div>
        <div class="row">
            @foreach($teams as $team)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="team-3">
                        <div class="thumb">
                            <img src="{{ 'storage/'.$team->image}}" alt="agent" class="img-fluid">
                        </div>
                        <div class="info">
                            <h5><a href=":;javascript">{{$team->name}}</a></h5>
                            <p>{{$team->position}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Our team end -->
