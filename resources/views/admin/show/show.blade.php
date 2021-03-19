@extends('admin::layout')
@section('content')

    <h3 class="d-inline-block">Pořad {{$show->name}}</h3>

    <a class="btn btn-secondary btn-sm float-right">Upravit pořad</a>

    <hr>

    <h4 class=" d-inline-block">Plánované epizody <small>({{$scheduled_episodes->count()}})</small></h4>

    <a class="btn btn-success mb-2 ml-3 btn-sm float-right" href="{{route('admin.episodes.create', ['show_id'=> $show->id])}}">
        + Vytvořit novou epizodu</a>

    <table class="table table-bordered">
        <th>Název epizody</th>
        <th>Datum vydání</th>
        @foreach($scheduled_episodes as $scheduled_episode)
            <tr>
                <td>
                    <a href="{{route('admin.episodes.edit', $scheduled_episode)}}">{{$scheduled_episode->name}}</a>
                </td>
                <td>{{$scheduled_episode->released_at->format('d.m.Y G:i')}}</td>
            </tr>
        @endforeach
    </table>

    <h4>Vydané epizody <small>({{$released_episodes->count()}})</small></h4>

    <table class="table table-bordered">
        <th>Název epizody</th>
        <th>Datum vydání</th>
        @foreach($released_episodes as $released_episode)
            <tr>
                <td>
                    <a href="{{route('admin.episodes.edit', $released_episode)}}">{{$released_episode->name}}</a>
                </td>
                <td>{{$released_episode->released_at->format('d.m.Y G:i')}}</td>
            </tr>
        @endforeach
    </table>

@endsection
