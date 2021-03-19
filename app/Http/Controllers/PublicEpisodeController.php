<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class PublicEpisodeController extends Controller
{
    public function episode($show_slug, $episode_slug)
    {
        $episode = Episode::where('name_slug', $episode_slug)->firstOrFail();

        return view('episode', [
            'episode' => $episode,
        ]);
    }


}
