<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;
use MichaelDojcar\LaravelAdmin\Facades\Admin;
use MichaelDojcar\LaravelAdmin\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/porad', function () {
    return view('show');
});

Route::get('/epizoda', function () {
    return view('episode');
});


Admin::routes(['register' => false]);

Route::middleware(Authenticate::class)->group(function () {
    Route::resource('/admin/shows', ShowController::class);
    Route::resource('/admin/episodes', EpisodeController::class);
});
