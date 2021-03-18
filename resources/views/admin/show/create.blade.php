@extends('admin::layout')
@section('content')
    <h3>Nový pořad</h3>

    <form method="POST"
          action="{{route('admin.shows.store')}}">
        @csrf

        <div class="form-group">
            <label>Název pořadu</label>
            <input class="form-control" required
                   name="name">
        </div>

        <input type="submit"
               class="btn btn btn-success" value="Uložit pořad">

        <a href="{{route('admin.shows.index')}}"
           class="btn btn-secondary">Zrušit</a>
    </form>

@endsection
