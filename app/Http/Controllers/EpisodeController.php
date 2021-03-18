<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Show;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function create(Request $request)
    {
        $show = Show::findOrFail($request['show_id']);

        return view('admin.episode.create', [
            'show' => $show
        ]);
    }

    public function store(Request $request)
    {
        $show = Show::findOrFail($request['show_id']);

        $episode = new Episode();
        $episode->name = $request['name'];
        $episode->show_id = $show->id;
        $episode->description = $request['description'];
        $episode->duration_seconds = $this->countDurationFromDurationString($request['duration']);
        $episode->is_livestream = $request->has('is_livestream');
        $episode->youtube_url = $request['youtube_url'];
        $episode->released_at = Carbon::parse($request['released_at']);
        $episode->save();

        return redirect()->route('admin.shows.show', $show);
    }

    private function countDurationFromDurationString($duration): int
    {
        $arr = explode(':', $duration);

        return $arr[0] * $arr[1];
    }
}
