@extends('layout')
@section('content')
    <section>
        <img src="{{asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 55vh">
        <div class="container-fluid px-5">
            <div class="carousel-caption vertical-center">
                <h1><b>Název pořadu</b></h1>
                <h4>Popis pořadu: Za časů dávných bohů, hrdinných náčelníků a králů, neklidem zmítaná země zrodila
                    hrdinu. Byl jím Mikýř, mocná princezna, zocelená žárem bitev. Síla... vášeň... nebezpečí. Jeho
                    odvaha změní svět.</h4>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link ml-0" href="/">Všechna videa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Epizody</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">O pořadu</a>
                </li>
            </ul>
        </div>

    </nav>

    <section>
        <div class="container-fluid px-lg-5">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h3><b>Epizody</b></h3>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-3">
                    <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                    <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-3">
                    <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                    <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-3">
                    <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                    <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-3">
                    <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                    <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-3">
                    <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                    <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-3">
                    <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                    <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-3">
                    <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                    <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-3">
                    <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                    <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 my-3">
                    <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                    <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>

            </div>
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
