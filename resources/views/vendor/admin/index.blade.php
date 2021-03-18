@extends('admin::layout')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h4>Administrace Live 4G</h4>
            </div>

            <p>Vítejte v administraci webové aplikace <a href="{{route('admin::index')}}">{{ config('app.name') }}</a>.
            </p>

            <div class="alert alert-warning">Při práci s administrací buďte opatrní. Všechny změny se propisují na
                veřejný web a uvidí je velké množství lidí. Vždy třikrát měřte a jednou řežte.
            </div>
        </div>

        <div class="col-md-3">
            @include('admin::components.support')
        </div>
    </div><!--/.row-->

@endsection
