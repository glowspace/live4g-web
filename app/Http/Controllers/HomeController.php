<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Show;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // Show highlights
        $show_1 = Show::findOrFail(1);
        $show_2 = Show::findOrFail(2);
        $show_3 = Show::findOrFail(3);
        $show_4 = Show::findOrFail(4);
        $show_5 = Show::findOrFail(5);

        $last_episodes = Episode::where('released_at', '<=', Carbon::now())
            ->orderByDesc('released_at')
            ->limit(6)
            ->get();

        $show_1_episodes = $show_1->released_episodes()
            ->orderByDesc('released_at')
            ->limit(6)
            ->get();

        $show_2_episodes = $show_2->released_episodes()
            ->orderByDesc('released_at')
            ->limit(6)
            ->get();

        $show_3_episodes = $show_3->released_episodes()
            ->orderByDesc('released_at')
            ->limit(6)
            ->get();

        $show_4_episodes = $show_4->released_episodes()
            ->orderByDesc('released_at')
            ->limit(6)
            ->get();

        $show_5_episodes = $show_5->released_episodes()
            ->orderByDesc('released_at')
            ->limit(6)
            ->get();

        return view('welcome', [
            'last_episodes' => $last_episodes,

            'show_1' => $show_1,
            'show_1_episodes' => $show_1_episodes,

            'show_2' => $show_2,
            'show_2_episodes' => $show_2_episodes,

            'show_3' => $show_3,
            'show_3_episodes' => $show_3_episodes,

            'show_4' => $show_4,
            'show_4_episodes' => $show_4_episodes,

            'show_5' => $show_5,
            'show_5_episodes' => $show_5_episodes,
        ]);
    }
}
