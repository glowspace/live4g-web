<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicEpisodeController;
use App\Http\Controllers\PublicShowController;
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

Admin::routes(['register' => false]);

Route::group([
    'prefix' => 'admin',
    'middleware' => [Authenticate::class],
    'as' => 'admin.',
], function () {

    Route::resource('/shows', ShowController::class);
    Route::resource('/episodes', EpisodeController::class);
});

/**
 * Public routes.
 */
Route::get('/', [HomeController::class, 'home']);
Route::get('/podporte-nas', [HomeController::class, 'support']);

Route::get('/porady', [PublicShowController::class, 'index']);
Route::get('/vyhledavani', [PublicShowController::class, 'search'])->name('public.search');

Route::get('/{show_slug}', [PublicShowController::class, 'show'])->name('public.show');
Route::get('/{show_slug}/{episode_slug}', [PublicEpisodeController::class, 'episode'])->name('public.episode');
