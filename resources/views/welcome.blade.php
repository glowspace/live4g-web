<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Live 4G</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">
</head>
<body>
<section>
@include('menu')
</section>
<section>

</section>
<section>
    <div class="container-fluid px-lg-5">
        <div class="row my-5">
            <div class="col-12 mb-3">
                <h3><b>Nejnovější epizody</b></h3>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-5">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-12 mb-3">
                <h3><b>Hřešíme s Kubou</b></h3>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                <h5 class="mt-3 mb-1"><b>Název videa</b></h5>
                <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
            </div>
        </div>
    </div>
</section>
</body>
</html>
