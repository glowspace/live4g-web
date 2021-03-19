<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Show;
use Illuminate\Http\Request;

class PublicEpisodeController extends Controller
{
    public function episode($show_slug, $episode_slug)
    {
        // Validate show slug
        $show = Show::where('name_slug', $show_slug)->first();

        if(!$show)
        {
            abort(404);
        }

        // Find episode
        $episode = Episode::where('name_slug', $episode_slug)->firstOrFail();

        $recommended_episodes = $episode->show
            ->released_episodes()
            ->where('released_at', '>', $episode->released_at)
            ->orderBy('released_at')
            ->limit(4)
            ->get();

        if($recommended_episodes->count() < 4)
        {
            $recommended_episodes = $episode->show
                ->released_episodes()
                ->orderBy('released_at')
                ->limit(4)
                ->get();
        }

        return view('episode', [
            'episode' => $episode,
            'recommended_episodes' => $recommended_episodes
        ]);
    }


}
