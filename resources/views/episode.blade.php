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
                </div>
            </div>
            <div class="row mt-4 mb-5">
                <div class="col-md-8">
                    <h3>O pořadu</h3>
                    <h5 class="font-weight-light">{{$episode->show->description_short}}</h5>
                    <a href="{{$episode->show->getPublicRoute()}}" class="btn btn-orange mt-2">Všechny epizody</a>
                </div>
            </div>
        </div>
    </section>
@endsection
