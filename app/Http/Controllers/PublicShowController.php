<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Show;

class PublicShowController extends Controller
{
    public function show($show_slug)
    {
        $show = Show::where('name_slug', $show_slug)->firstOrFail();

        return view('show', [
            'show' => $show,
            'show_episodes'=>$show->released_episodes()
                ->orderByDesc('released_at')
                ->get(),
        ]);
    }
}
