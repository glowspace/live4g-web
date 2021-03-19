<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Show;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $episode->name_slug = Str::slug($request['name']);
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

        if (count($arr) == 2) {
            return $arr[0] * 60 + $arr[1];
        } elseif (count($arr) == 3) {
            return $arr[0] * 3600 + $arr[1] * 60 + $arr[2];
        }
    }
}
