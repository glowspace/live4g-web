@extends('layout')
@section('content')
    <section>
        <div class="container-fluid px-5 my-5">
            <div class="row">
                <div class="col-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%"
                                height="auto"
                                src="{{$episode->getEmbedURL()}}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row mb-2">
                        <div class="col">
                            <div class="item">
                                <span class="time-badge">21:48</span>
                                <span class="new-badge">Nové</span>
                                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1"><b>Název videa</b></h5>
                            <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                            <p class="description">Kubo, já to na tebe prásknu!
                                Může kněz porušit zpovědní tajemství? To by přišla exkomunikace!</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <div class="item">
                                <span class="time-badge">21:48</span>
                                <span class="new-badge">Nové</span>
                                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1"><b>Název videa</b></h5>
                            <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                            <p class="description">Kubo, já to na tebe prásknu!
                                Může kněz porušit zpovědní tajemství? To by přišla exkomunikace!</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <div class="item">
                                <span class="time-badge">21:48</span>
                                <span class="new-badge">Nové</span>
                                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1"><b>Název videa</b></h5>
                            <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                            <p class="description">Kubo, já to na tebe prásknu!
                                Může kněz porušit zpovědní tajemství? To by přišla exkomunikace!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="item">
                                <span class="time-badge">21:48</span>
                                <span class="new-badge">Nové</span>
                                <img src="{{asset('/images/epizoda.png')}}" width="100%" class="border-rounded">
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1"><b>Název videa</b></h5>
                            <p class="small">Název pořadu <span class="float-right">dd/mm/rr</span></p>
                            <p class="description">Kubo, já to na tebe prásknu!
                                Může kněz porušit zpovědní tajemství? To by přišla exkomunikace!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 mb-5">
                <div class="col-8">
                    <h3><b>{{$episode->name}} | {{$episode->show->name}}</b></h3>
                    <p class="text-secondary">Publikováno: {{$episode->released_at->format('j.n.Y')}}</p>
                    <hr>
                    <h5 class="font-weight-light mb-5">{{$episode->description}}</h5>

                    <h3>O pořadu</h3>
                    <h5 class="font-weight-light">{{$episode->show->description_short}}</h5>
                </div>
            </div>
        </div>
    </section>
@endsection
