@php
    $episodes = $show->released_episodes()
         ->orderByDesc('released_at')
         ->limit(6)
         ->get();
@endphp

<div class="row my-5">
    <div class="col-12 mb-3">
        <h3 class="d-inline-block"><b>{{$show->name}}</b></h3>
        <a href="{{$show->getPublicRoute()}}" class="d-inline-block text-uppercase more font-weight-bold float-right">Ukázat
            vše
            <i class="fas fa-chevron-right"></i></a>
    </div>

    @foreach($episodes as $e)
        @component('components.thumb', ['e' => $e])@endcomponent
    @endforeach
</div>
