<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {
        return view('show.index', [
            'shows' => Show::all(),
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $show = new Show();
        $show->name = $request['name'];
        $show->save();

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
