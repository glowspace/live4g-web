@extends('layout')
@section('content')

    <section>
        <div class="container-fluid px-lg-5">
            <div class="row my-5">
                <div class="col-12 mb-3" id="epizody">
                    <h3><b>Vyhledávání</b></h3>
                    <p>Počet výsledků: {{$found_episodes->count()}}</p>
                </div>

                @foreach($found_episodes as $e)
                    @component('components.thumb', ['e' => $e])@endcomponent
                @endforeach

                @if(!$found_episodes->count())
                    <div class="col-12">
                    Nebyly nalezeny žádné výsledky.
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
