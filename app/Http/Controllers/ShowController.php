<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use MichaelDojcar\LaravelPhoto\PhotoService;

class ShowController extends Controller
{
    public function index()
    {
        return view('admin.show.index', [
            'shows' => Show::all(),
        ]);
    }

    public function create()
    {
        return view('admin.show.create');
    }

    public function store(Request $request)
    {
        $show = new Show();
        $show->name = $request['name'];
        $show->name_slug = Str::slug($request['name']);
        $show->save();

        return redirect()->route('admin.shows.show', $show);
    }

    public function show(Show $show)
    {
        $scheduled_episodes = $show->episodes()
            ->where('released_at', '>', Carbon::now())
            ->orderByDesc('released_at')
            ->get();

        $released_episodes = $show->episodes()
            ->where('released_at', '<=', Carbon::now())
            ->orderByDesc('released_at')
            ->get();

        return view('admin.show.show', [
            'show' => $show,
            'scheduled_episodes' => $scheduled_episodes,
            'released_episodes' => $released_episodes,

        ]);
    }

    public function edit(Show $show)
    {
        return view('admin.show.edit', [
            'show' => $show
        ]);
    }

    public function update(Show $show, Request $request)
    {
        $show->name = $request['name'];
        $show->description_short = $request['description_short'];
        $show->description_long = $request['description_long'];

        $ps = new PhotoService();

        // Files
        if ($request->hasFile('photo_thumb')) {
            $photo = $ps->create($show->name_slug, $request->file('photo_thumb'));
            $show->photo_thumb = $photo->id;
        }

        if ($request->hasFile('photo_panorama')) {
            $photo = $ps->create($show->name_slug, $request->file('photo_panorama'));
            $show->photo_panorama = $photo->id;
        }

        $show->save();

        return redirect()->route('admin.shows.show', $show);
    }

    public function destroy()
    {

    }
}
