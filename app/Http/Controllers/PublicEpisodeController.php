<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PublicEpisodeController extends Controller
{
    public function episode($show_slug, $episode_slug)
    {
        // Validate show slug
        $show = Show::where('name_slug', $show_slug)->first();

        if (!$show) {
            abort(404);
        }

        // Find episode
        $episode = Episode::where('name_slug', $episode_slug)->firstOrFail();

        $recommended_episodes = $episode->show
            ->released_episodes()
            ->where('released_at', '<', $episode->released_at)
            ->orderByDesc('released_at')
            ->limit(4)
            ->get();

        // Add latest videos from another shows if there are no more
        if ($recommended_episodes->count() < 4) {
            $needed = 4 - $recommended_episodes->count();

            $last_episodes = Episode::where('released_at', '<=', Carbon::now())
                ->where('show_id', '!=', $episode->show_id)
                ->where('show_id', '!=', 4)
                ->orderByDesc('released_at')
                ->limit($needed)
                ->get();

            $recommended_episodes = $recommended_episodes->concat($last_episodes);
        }

        return view('episode', [
            'episode' => $episode,
            'recommended_episodes' => $recommended_episodes
        ]);
    }


}
