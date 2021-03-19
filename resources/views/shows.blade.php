@extends('layout')
@section('content')
    <section>
        <div class="container-fluid px-5 my-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <h2>Všechny pořady</h2>
                </div>
                @foreach($shows as $show)
                <div class="col-3 my-3">
                    <img src="{{asset('/images/slider.jpg')}}" width="100%" height="180px">
                </div>
                <div class="col-9 my-3">
                    <h3>{{$show->name}}</h3>
                    <p>{{$show->description_short}}</p>
                    <a href="{{$show->getPublicRoute()}}" class="btn btn-orange">Zobrazit epizody</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
