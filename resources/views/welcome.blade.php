@extends('layout')
@section('content')
    <section>
        {{--        <img src="{{asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 45vh">--}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                @foreach([$show_1, $show_2, $show_3, $show_4] as $show)
                <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                    <img src="{{$show->photoPanorama ? $show->photoPanorama->size(1920, 550) : asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 50vh; filter: brightness(0.7)">
                    <div class="container-fluid px-5">
                        <div class="carousel-caption vertical-center px-5" style="bottom: 50px!important;">
                            <h1><b>{{$show->name}}</b></h1>
                            <h4>{{$show->description_short}}</h4>
                            <a href="{{$show->getLastEpisode()->getPublicRoute()}}" class="btn btn-orange mt-3">Sledovat pořad</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="carousel-item">
                    <img src="{{asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 45vh">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 45vh">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section>
        <div class="container-fluid px-lg-5">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h3><b>Nejnovější epizody</b></h3>
                </div>

                @foreach($last_episodes as $e)
                    @component('components.thumb', ['e' => $e])@endcomponent
                @endforeach
            </div>

            @component('components.show_latest_thumbs', ['show'=> $show_4])@endcomponent

            @component('components.show_latest_thumbs', ['show'=> $show_1])@endcomponent

            @component('components.show_latest_thumbs', ['show'=> $show_2])@endcomponent

            @component('components.show_latest_thumbs', ['show'=> $show_3])@endcomponent

            @component('components.show_latest_thumbs', ['show'=> $show_5])@endcomponent
        </div>
    </section>
@endsection
