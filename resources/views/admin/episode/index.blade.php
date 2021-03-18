@extends('admin.layout')
@section('content')
    <h3>Epizody</h3>

    <a href="{{route('admin.episodes.create')}}" class="btn btn-success mb-3">Přidat novou epizodu</a>

    <table class="table table-striped">
        <tr>
            <th>Náhled</th>
            <th>Číslo</th>
            <th>Název</th>
            <th>YT odkaz</th>
        </tr>
        @foreach($episodes as $episode)
            <tr>
                <td>
                    <a href="{{route('admin.episodes.edit', $episode)}}"><img src="{{$episode->getPreviewUrl()}}" style="width: 90px;"></a>
                </td>
                <td>{{$episode->number}}</td>
                <td>
                    <a href="{{route('admin.episodes.edit', $episode)}}">{{$episode->name}}</a>
                </td>
                <td><a href="{{$episode->url}}">{{$episode->url}}</a></td>
            </tr>
        @endforeach
    </table>

@endsection
