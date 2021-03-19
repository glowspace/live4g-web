@extends('admin::layout')
@section('content')
    <h3>Přidání epizody pořadu {{$show->name}}</h3>

    <form method="POST"
          action="{{route('admin.episodes.store')}}">
        @csrf

        <input type="hidden" name="show_id" value="{{$show->id}}">

        <div class="card">
            <div class="card-header">1. Základní informace</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Název epizody</label>
                    <input class="form-control" required
                           name="name">
                </div>

                <div class="form-group">
                    <label>Datum a čas vydání</label>
                    <input class="form-control" type="datetime-local" required
                           name="released_at" value="{{\Carbon\Carbon::now()->addDay()->startOfMinute()->format('Y-m-d\TH:i')}}">
                    <small>Čas, kdy se epizoda zobrazí na webu.</small>
                </div>

                <div class="form-group">
                    <p>Jedná se o živý přenos <input name="is_livestream" type="checkbox"></p>
                    <small>Pokud je nastaveno jako živý přenos, epizoda se zobrazí na webu automaticky v
                        předstihu.</small>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">2. Video zdroj</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Odkaz na YouTube video</label>
                    <input name="youtube_url" required type="url" class="form-control">
                    <small>Odkaz musí být ve formátu: https://www.youtube.com/watch?v=OF3Q8WNna8E. <br>Video na YT už by
                        mělo mít nastavenou rozumnou miniaturu.</small>
                </div>

                <div class="form-group">
                    <label>Délka videa</label>
                    <input name="duration" required type="text" placeholder="0:00" class="form-control">
                    <small>Délka ve tvaru 0:17 (h:mm). U streamu uvádějte odhadovanou délku streamu.</small>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">3. Další informace o epizodě</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Popisek u videa</label>
                    <textarea name="description" class="form-control" required></textarea>
                    <small>Max. 3 řádky.</small>
                </div>
            </div>
        </div>

        <input type="submit"
               class="btn btn btn-success" value="Přidat epizodu">

        <a href="{{route('admin.shows.show', $show)}}"
           class="btn btn-secondary">Storno</a>
    </form>

@endsection
