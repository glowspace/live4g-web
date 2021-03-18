@extends('layout')
@section('content')
    <section>
        <img src="{{asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 45vh">
    </section>
    <section>
        <div class="container-fluid px-lg-5">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h3><b>Nejnovější epizody</b></h3>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:48</span>
                        <span class="new-badge">Nové</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">8:15</span>
                        <span class="live-badge"><i class="fas fa-circle text-danger blinking"></i> Živě</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">12:35</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:01</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:48</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:48</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h3 class="d-inline-block"><b>Hřešíme s Kubou</b></h3>
                    <a href="/porad" class="d-inline-block text-uppercase more font-weight-bold float-right">Ukázat vše
                        <i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:48</span>
                        <span class="new-badge">Nové</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">8:15</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">12:35</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:01</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:48</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:48</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h3 class="d-inline-block"><b>Jiří Dyčka</b></h3>
                    <a href="/porad" class="d-inline-block text-uppercase more font-weight-bold float-right">Ukázat vše
                        <i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:48</span>
                        <span class="new-badge">Nové</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">8:15</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">12:35</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:01</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:48</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="item">
                        <span class="time-badge">21:48</span>
                        <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                        <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                    </div>
                    <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                </div>
            </div>
        </div>
    </section>
@endsection
