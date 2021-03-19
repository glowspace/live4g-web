<div class="col-lg-2 col-md-4 col-sm-6 col-12">
    <a href="{{$e->getPublicRoute()}}">
        <div class="item">
            <span class="time-badge">{{$e->getDuration()}}</span>
            @if($e->isLive())
                <span class="live-badge"><i
                        class="fas fa-circle text-danger blinking"></i> Živě</span>
            @elseif($e->isNew())
                <span class="new-badge">Nové</span>
            @endif

            <img src="{{$e->getPreviewURL()}}" width="100%" class="border-rounded">
            <h5 class="mt-3 mb-1"><b>{{$e->name}}</b></h5>
        </div>
        <p class="small">{{$e->show->name}} <span
                class="float-right">{{$e->released_at->format('d/m/Y')}}</span></p>
    </a>
</div>
