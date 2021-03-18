<?php

namespace App\Http\Controllers;

use App\Models\Show;
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
}
