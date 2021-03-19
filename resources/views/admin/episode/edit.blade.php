@extends('admin::layout')
@section('content')
    <h3>Úprava epizody pořadu {{$episode->show->name}}</h3>

    <form method="POST"
          action="{{route('admin.episodes.update', $episode)}}">
        @csrf
        @method('PATCH')

        <div class="card">
            <div class="card-header">1. Základní informace</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Název epizody</label>
                    <input class="form-control" required
                           name="name" value="{{$episode->name}}">
                </div>

                <div class="form-group">
                    <label>Datum a čas vydání</label>
                    <input class="form-control"  required
                           name="released_at" id="released_at">
                    <small>Čas, kdy se epizoda zobrazí na webu.</small>
                </div>

                <div class="form-group">
                    <p>Jedná se o živý přenos <input name="is_livestream"
                                                     type="checkbox" {{$episode->is_livestream ? 'checked':''}}></p>
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
                    <input name="youtube_url"
                           required
                           type="url"
                           value="{{$episode->youtube_url}}"
                           class="form-control">
                    <small>Odkaz musí být ve formátu: https://www.youtube.com/watch?v=OF3Q8WNna8E. <br>Video na YT už by
                        mělo mít v době vydání nastavenou rozumnou miniaturu.</small>
                </div>

                <div class="form-group">
                    <label>Délka videa</label>
                    <input name="duration"
                           required
                           type="text"
                           placeholder="0:00"
                           value="{{$episode->getDuration()}}"
                           class="form-control">
                    <small>Délka ve tvaru 0:17 (m:s) nebo 1:20:05 (h:m:s). U streamu uvádějte odhadovanou délku
                        streamu.</small>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">3. Další informace o epizodě</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Popisek u videa</label>
                    <textarea name="description" class="form-control" required>{{$episode->description}}</textarea>
                    <small>Krátký popisek 2-3 věty.</small>
                </div>
            </div>
        </div>

        <input type="submit"
               class="btn btn btn-success" value="Uložit změny">

        <a href="{{route('admin.shows.show', $episode->show)}}"
           class="btn btn-secondary">Storno</a>
    </form>

    <script>
        $("#released_at").flatpickr({
            enableTime: true,
            dateFormat: "d.m.Y H:i",
            defaultDate: "{{ $episode->released_at->toIsoString() }}",
            altFormat: "Y-m-d H:i",
            time_24hr: true,
            locale: "cs"
        });
    </script>

@endsection
