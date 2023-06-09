<?php

use App\Http\Controllers\PaketController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::post('/track', [App\Http\Controllers\DashboardController::class, 'track']);





Auth::routes();

Route::get('/dashboard-admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

route::get('/galeri', [App\Http\Controllers\GalleryController::class, 'index']);
route::get('/add-galeri', [App\Http\Controllers\GalleryController::class, 'create']);
route::post('/save-galeri', [App\Http\Controllers\GalleryController::class, 'store']);
route::get('/edit-galeri/{id}', [App\Http\Controllers\GalleryController::class, 'edit']);
route::post('/update-galeri', [App\Http\Controllers\GalleryController::class, 'update']);
route::post('/delete-galeri', [App\Http\Controllers\GalleryController::class, 'destroy']);

route::get('/paket', [App\Http\Controllers\PaketController::class, 'index']);
route::get('/add-paket', [App\Http\Controllers\PaketController::class, 'create']);
route::post('/save-paket', [App\Http\Controllers\PaketController::class, 'store']);
route::get('/edit-paket/{id}', [App\Http\Controllers\PaketController::class, 'edit']);
route::post('/update-paket', [App\Http\Controllers\PaketController::class, 'update']);
route::post('/delete-paket', [App\Http\Controllers\PaketController::class, 'destroy']);

route::get('/track_paket', [App\Http\Controllers\TrackController::class, 'index']);
route::get('/add-track_paket', [App\Http\Controllers\TrackController::class, 'create']);
route::post('/save-track_paket', [App\Http\Controllers\TrackController::class, 'store']);
route::get('/edit-track_paket/{id}', [App\Http\Controllers\TrackController::class, 'edit']);
route::post('/update-track_paket', [App\Http\Controllers\TrackController::class, 'update']);
route::post('/delete-track_paket', [App\Http\Controllers\TrackController::class, 'destroy']);

route::get('/client', [App\Http\Controllers\ClientController::class, 'index']);
route::get('/add-client', [App\Http\Controllers\ClientController::class, 'create']);
route::post('save-client', [App\Http\Controllers\ClientController::class, 'store']);
route::get('edit-client/{id}', [App\Http\Controllers\ClientController::class, 'edit']);
route::post('update-client', [App\Http\Controllers\ClientController::class, 'update']);
route::post('/delete-client', [App\Http\Controllers\ClientController::class, 'destroy']);
