@extends('admin::layout')
@section('content')
    <h3>Úprava pořadu {{$show->name}}</h3>

    <form method="POST"
          action="{{route('admin.shows.update', $show)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label>Název pořadu</label>
            <input class="form-control" required
                   name="name" value="{{$show->name}}">
        </div>

        <div class="form-group">
            <label>Krátký popis</label>
            <textarea class="form-control" name="description_short">{{$show->description_short}}</textarea>
        </div>

        <div class="form-group">
            <label>Dlouhý popis</label>
            <textarea class="form-control" name="description_long" rows="10">{{$show->description_long}}</textarea>
        </div>

        <div class="card">
            <div class="card-header">Média</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Miniatura pořadu (16:9)</label>
                    <input type="file" name="photo_thumb" class="form-control-file">
                </div>

                <div class="form-group">
                    <label>Panorama pořadu (1920x550)</label>
                    <input type="file" name="photo_panorama" class="form-control-file">
                    <br>
                    <small>Zobrazuje se u přehledu epizod</small>
                </div>
            </div>
        </div>


        <input type="submit"
               class="btn btn btn-success" value="Uložit pořad">

        <a href="{{route('admin.shows.index')}}"
           class="btn btn-secondary">Zrušit</a>
    </form>

@endsection
