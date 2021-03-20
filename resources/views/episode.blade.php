@extends('layout')
@section('content')
    <section>
        <div class="container-fluid px-md-5 my-md-5">
            <div class="row">
                <div class="col-md-8 px-0 px-md-3">
                    <div class="embed-responsive embed-responsive-16by9 mb-3 mb-md-4">
                        <iframe class="embed-responsive-item" width="100%"
                                height="auto"
                                src="{{$episode->getEmbedURL()}}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>

                    <div class="px-3 px-md-0 mb-3">
                        <h3><b>{{$episode->name}} | {{$episode->show->name}}</b></h3>
                        <p class="text-secondary">Publikováno: {{$episode->released_at->format('j.n.Y')}}</p>
                        <hr>
                        <h5 class="font-weight-light mb-3">{{$episode->description}}</h5>
                    </div>

                    <h3 class="mt-4">O pořadu</h3>
                    <h5 class="font-weight-light">{{$episode->show->description_short}}</h5>
                    <a href="{{$episode->show->getPublicRoute()}}" class="btn btn-orange mt-2">Všechny epizody</a>
                </div>
                <div class="col-md-4">
                    @foreach($recommended_episodes as $e)
                        <a href="{{$e->getPublicRoute()}}">
                            <div class="row mb-3">
                                <div class="col pr-1">
                                    <div class="item">
                                        <span class="time-badge">{{$e->getDuration()}}</span>

                                        @if($e->isLive())
                                            <span class="live-badge"><i
                                                    class="fas fa-circle text-danger blinking"></i> Živě</span>
                                        @elseif($e->isNew())
                                            <span class="new-badge">Nové</span>
                                        @endif

                                        <img src="{{$e->getPreviewURL()}}" width="100%" class="border-rounded">
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="mb-1"><b>{{$e->name}}</b></h5>
                                    <p class="small">{{$e->show->name}}
                                        <span class="float-right">{{$e->released_at->format('d/m/Y')}}</span></p>
                                    <p class="description mb-0">{{\Illuminate\Support\Str::limit($e->description, 110, '...')}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <div class="card border-0 bg-light mt-0 py-3 my-4"
                         style="box-shadow: 0 2px 18px 0 rgb(0 0 0 / 15%)">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="mb-3">Líbí se Vám pořad {{$episode->show->name}}?</h4>
                                <h5 class="text-orange mt-4">Podpořte naši službu</h5>
                                <p>Tvorba tohoto pořadu a mnoha dalších v rámci internetové televize Live 4G je možná
                                    díky Vaší podpoře.
                                    Budeme rádi, když nás ponesete v modlitbě nebo budete sdílet naší tvorbu.</p>

                                <h5 class="text-orange mt-4">Staňte se patrony Live 4G</h5>
                                <p>Abychom mohli fungovat, potřebujeme podporu i po materiální stránce.
                                    Hledáme dárce, kteří by se zapojili v kampani 100×100: 100 pravidelných
                                    podporovatelů, kteří každý měsíc přispějí částkou 100 korun, nebo jakoukoliv
                                    jinou. </p>

                                <p>V současné době díky Vaší podpoře získáme</p>
                                <h4><b>{{number_format(config('live4g.donations_monthly'), 0, 0, ' ')}} Kč</b> <span
                                        class="small">za měsíc</span></h4>
                                <div class="progress mt-2 mb-3">
                                    <div class="progress-bar bg-orange"
                                         role="progressbar"
                                         style="width: {{config('live4g.donators_count')}}%;"
                                         aria-valuenow="{{config('live4g.donators_count')}}"
                                         aria-valuemin="0"
                                         aria-valuemax="100">
                                    </div>
                                </div>
                                <p><b>od 21 dárců ze 100 potřebných</b></p>

                                <a href="/podporte-nas" class="btn btn-orange">Podpořit projekt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="row mt-4 mb-5">--}}
            {{--                <div class="col-md-8">--}}
            {{--                    <h3>O pořadu</h3>--}}
            {{--                    <h5 class="font-weight-light">{{$episode->show->description_short}}</h5>--}}
            {{--                    <a href="{{$episode->show->getPublicRoute()}}" class="btn btn-orange mt-2">Všechny epizody</a>--}}
            {{--                </div>--}}
            {{--                <div class="col-md-4">--}}
            {{--                    <div class="card border-0 bg-light mt-0 py-3" style="box-shadow: 0 2px 18px 0 rgb(0 0 0 / 15%)">--}}
            {{--                        <div class="card-content">--}}
            {{--                            <div class="card-body">--}}
            {{--                                <h2 class="mb-3">Podpořte nás finančně!</h2>--}}
            {{--                                <p>Abychom mohli fungovat, potřebujeme podporu i po stránce materiální.</p>--}}
            {{--                                <p>Hledáme dárce, kteří by se zapojili v kampani <b>100×100</b>: 100 pravidelných--}}
            {{--                                    podporovatelů, kteří každý měsíc přispějí částkou 100 korun, nebo jakoukoliv--}}
            {{--                                    jinou.</p>--}}
            {{--                                <h5 class="mt-5">V současné době díky Vaší podpoře získáme</h5>--}}
            {{--                                <h1><b>2 000 Kč</b> <span class="small">za měsíc</span></h1>--}}
            {{--                                <div class="progress mt-2 mb-3">--}}
            {{--                                    <div class="progress-bar bg-orange"--}}
            {{--                                         role="progressbar"--}}
            {{--                                         style="width: 20%;"--}}
            {{--                                         aria-valuenow="20"--}}
            {{--                                         aria-valuemin="0"--}}
            {{--                                         aria-valuemax="100">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <p><b>od 20 dárců ze 100 potřebných</b></p>--}}

            {{--                                <p class="mt-4">Ale i díky vašim jednorázovým darům můžeme růst a pomáhat budovat--}}
            {{--                                    Boží--}}
            {{--                                    království.--}}
            {{--                                    Budeme ti velmi vděční za každý dar v jakékoliv výši.</p>--}}
            {{--                                <div class="row">--}}
            {{--                                    <div class="col-5">--}}
            {{--                                        <img src="{{asset('/images/qr_platba.png')}}" width="100%">--}}
            {{--                                    </div>--}}
            {{--                                    <div class="col-7">--}}
            {{--                                        <h4 class="mt-3">Bankovní spojení:</h4>--}}
            {{--                                        <h6><b>Live 4G, z. s.</b></h6>--}}
            {{--                                        <h6><b>2701934227/2010 (Fio banka)</b></h6>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </section>
@endsection
