<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $last_episodes = Episode::where('released_at', '<=', Carbon::now())
            ->orderBy('released_at')
            ->limit(6)
            ->get();

        return view('welcome', [
            'last_episodes' => $last_episodes,
        ]);
    }
}
