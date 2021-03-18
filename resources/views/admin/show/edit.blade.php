@extends('admin.layout')
@section('content')
    <h3>Úprava místa</h3>

    <form method="POST"
          action="{{route('admin.episodes.update', $episode)}}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label>Název epizody</label>
            <input class="form-control" required
                   name="name" value="{{$episode->name}}">
        </div>

        <div class="form-group">
            <label>Číslo epizody</label>
            <input name="number" class="form-control" type="number" required value="{{$episode->number}}">
            <small>podle něj se skládá pořadí</small>
        </div>

        <div class="form-group">
            <label>Odkaz videa na YouTube</label>
            <input name="url" required type="url" class="form-control" value="{{$episode->url}}">
        </div>

        <div class="form-group">
            <label>Popis u videa</label>
            <input name="description" required type="text" class="form-control" value="{{$episode->description}}">
        </div>

        <input type="submit"
               class="btn btn btn-success">

        <a href="{{route('admin.episodes.index')}}"
           class="btn btn-secondary">Zrušit změny</a>
    </form>

@endsection
