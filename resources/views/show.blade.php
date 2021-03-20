@extends('layout')
@section('content')
    <section>
        @if($show->photoPanorama)
            <img src="{{$show->photoPanorama->size(1920, 550)}}"
                 width="100%"
                 style="object-fit: cover; height: 55vh; filter: brightness(0.7);   object-position: 70%">
        @else
            <img src="{{asset('/images/slider.jpg')}}"
                 width="100%"
                 style="object-fit: cover; height: 55vh; filter: brightness(0.7)">
        @endif
        <div class="container-fluid px-5">
            <div class="carousel-caption vertical-center">
                <h1><b>{{$show->name}}</b></h1>
                <h4>{{$show->description_short}}</h4>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand navbar-light bg-light px-md-5 ">
        {{--        <button class="navbar-toggler"--}}
        {{--                type="button"--}}
        {{--                data-toggle="collapse"--}}
        {{--                data-target="#navbarTogglerDemo02"--}}
        {{--                aria-controls="navbarTogglerDemo02"--}}
        {{--                aria-expanded="false"--}}
        {{--                aria-label="Toggle navigation">--}}
        {{--            <span class="navbar-toggler-icon"></span>--}}
        {{--        </button>--}}

        {{--        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">--}}
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            {{--                <li class="nav-item">--}}
            {{--                    <a class="nav-link ml-0" href="/">Všechna videa</a>--}}
            {{--                </li>--}}
            <li class="nav-item">
                <a class="nav-link ml-0 pl-0" href="#epizody">Epizody</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#o-poradu">O pořadu</a>
            </li>
        </ul>
        {{--        </div>--}}

    </nav>

    <section>
        <div class="container-fluid px-lg-5">
            <div class="row my-5">
                <div class="col-12 mb-3" id="epizody">
                    <h3><b>Epizody</b></h3>
                </div>

                @foreach($show_episodes as $e)
                    @component('components.thumb', ['e' => $e])@endcomponent
                @endforeach
            </div>

            @if($show->description_long || $show->description_short)
                <div class="row my-5">
                    <div class="col-12 mb-3" id="o-poradu">
                        <h3><b>O pořadu</b></h3>
                    </div>


                    @if($show->description_long)
                        <div class="col-md-8 col-12" style="white-space: pre-wrap;">{!! $show->description_long !!}</div>
                    @else
                        <div class="col-md-8 col-12" style="white-space: pre-wrap;">{!! $show->description_short !!}</div>
                    @endif
                    {{--                    <div class="col-4">--}}
                    {{--                        @if($show->photoThumb)--}}
                    {{--                            <img src="{{$show->photoThumb->size(400, 225)}}">--}}
                    {{--                        @endif--}}
                    {{--                    </div>--}}

                </div>
            @endif
        </div>
    </section>
    {{--    <section class="bg-black py-5">--}}
    {{--        <div class="container-fluid px-lg-5">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12 mb-3">--}}
    {{--                    <h3><b>Mohlo by se vám také líbit</b></h3>--}}
    {{--                </div>--}}
    {{--                <div class="col-3">--}}
    {{--                    <img>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
@endsection
