@extends('admin.layout')
@section('content')
    <h3>Přidání epizody</h3>

    <a href="{{route('admin.episodes.index')}}"
       class="btn btn-secondary mb-2">Vrátit se bez uložení</a>

    <form method="POST"
          action="{{route('admin.episodes.store')}}">
        @csrf

        <div class="form-group">
            <label>Název epizody</label>
            <input class="form-control" required
                   name="name">
        </div>

        <div class="form-group">
            <label>Číslo epizody</label>
            <input name="number" class="form-control" type="number" required>
            <small>podle něj se skládá pořadí</small>
        </div>

        <div class="form-group">
            <label>Odkaz videa na YouTube</label>
            <input name="url" required type="url" class="form-control">
        </div>

        <div class="form-group">
            <label>Popis u videa</label>
            <input name="description" required type="text" class="form-control">
        </div>

        <input type="submit"
               class="btn btn btn-success">
    </form>

@endsection
