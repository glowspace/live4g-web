@extends('layout')
@section('content')
    <section>
        {{--        <img src="{{asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 45vh">--}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 45vh">
                </div>
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

            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h3 class="d-inline-block"><b>{{$show_1->name}}</b></h3>
                    <a href="{{$show_1->getPublicRoute()}}" class="d-inline-block text-uppercase more font-weight-bold float-right">Ukázat vše
                        <i
                            class="fas fa-chevron-right"></i></a>
                </div>
                @php
                    $e = null;
                @endphp

                @foreach($show_1_episodes as $e)
                    @component('components.thumb', ['e' => $e])@endcomponent
                @endforeach
            </div>

            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h3 class="d-inline-block"><b>{{$show_2->name}}</b></h3>
                    <a href="{{$show_2->getPublicRoute()}}" class="d-inline-block text-uppercase more font-weight-bold float-right">Ukázat vše
                        <i
                            class="fas fa-chevron-right"></i></a>
                </div>
                @php
                    $e = null;
                @endphp

                @foreach($show_2_episodes as $e)
                    @component('components.thumb', ['e' => $e])@endcomponent
                @endforeach
            </div>

            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h3 class="d-inline-block"><b>{{$show_3->name}}</b></h3>
                    <a href="{{$show_3->getPublicRoute()}}" class="d-inline-block text-uppercase more font-weight-bold float-right">Ukázat vše
                        <i
                            class="fas fa-chevron-right"></i></a>
                </div>
                @php
                    $e = null;
                @endphp

                @foreach($show_3_episodes as $e)
                    @component('components.thumb', ['e' => $e])@endcomponent
                @endforeach
            </div>
        </div>
    </section>
@endsection
