<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Show;
use Illuminate\Http\Request;


class PublicShowController extends Controller
{
    public function show($show_slug)
    {
        $show = Show::where('name_slug', $show_slug)->firstOrFail();

        return view('show', [
            'show' => $show,
            'show_episodes' => $show->released_episodes()
                ->orderByDesc('released_at')
                ->get(),
        ]);
    }

    public function index()
    {
        return view('shows', [
            'shows' => Show::orderBy('name')->get()
        ]);
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $found_episodes = Episode::where('name', 'LIKE', '%'. $q .'%')->get();

        return view('search', [
            'found_episodes' => $found_episodes,
            'search_query' => $q
        ]);
    }
}
