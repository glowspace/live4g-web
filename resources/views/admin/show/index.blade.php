@extends('admin::layout')
@section('content')
    <h3>Pořady</h3>

    <a href="{{route('admin.shows.create')}}" class="btn btn-success mb-3">Přidat nový pořad</a>

    <table class="table table-striped">
        <tr>
            <th>Název pořadu</th>
            <th>Počet epizod</th>
        </tr>
        @foreach($shows as $show)
            <tr>
                <td>
                    <a href="{{route('admin.shows.show', $show)}}">{{$show->name}}</a>
                </td>
                <td>{{ $show->episodes()->count() }}</td>
            </tr>
        @endforeach
    </table>

@endsection
