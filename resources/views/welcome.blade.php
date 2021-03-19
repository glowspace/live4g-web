@extends('layout')
@section('content')
    <section>
        {{--        <img src="{{asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 45vh">--}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/images/slider.jpg')}}" width="100%" style="object-fit: cover; height: 45vh">
                    <div class="container-fluid px-5">
                        <div class="carousel-caption vertical-center px-5" style="bottom: 50px!important;">
                            <h1><b>Název</b></h1>
                            <h4>Neznáš Boha, nebo jsi už dlouho nezakusil, že je živý a skutečně jedná? My jsme to
                                zažili a nechceme si to nechat pro sebe. Naší touhou je zprostředkovat ti zkušenost s
                                živým Bohem a nabídnout ti prostor pozvat ho do svého života, když budeš chtít. Na
                                vlastní kůži jsme se přesvědčili o tom, že to stojí za to.</h4>
                            <a href="" class="btn btn-orange mt-3">Přehrát epizodu</a>
                        </div>
                    </div>
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

            @component('components.show_latest_thumbs', ['show'=> $show_4])@endcomponent

            @component('components.show_latest_thumbs', ['show'=> $show_1])@endcomponent

            @component('components.show_latest_thumbs', ['show'=> $show_2])@endcomponent

            @component('components.show_latest_thumbs', ['show'=> $show_3])@endcomponent

            @component('components.show_latest_thumbs', ['show'=> $show_5])@endcomponent
        </div>
    </section>
@endsection
