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
            ->where('show_id', '!=', 4)
            ->orderByDesc('released_at')
            ->limit(6)
            ->get();

        return view('welcome', [
            'last_episodes' => $last_episodes,

            'show_1' => $show_1,
            'show_2' => $show_2,
            'show_3' => $show_3,
            'show_4' => $show_4,
            'show_5' => $show_5,
        ]);
    }
}
