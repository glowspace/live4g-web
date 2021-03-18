<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/porad', function () {
    return view('show');
});

Route::get('/epizoda', function () {
    return view('episode');
});


Admin::routes(['register' => false]);

Route::group([
    'prefix' => 'admin',
    'middleware' => [Authenticate::class],
    'as' => 'admin.',
], function () {

    Route::resource('/shows', ShowController::class);
    Route::resource('/episodes', EpisodeController::class);
});
