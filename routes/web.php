<?php

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

use App\Http\Controllers\AudioController;

use App\Models\User;

use App\Models\Audio;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [AudioController::class, 'index']);
Route::get('/events/create', [AudioController::class, 'create'])->middleware('auth');
Route::get('/events/edit/{id}', [AudioController::class, 'edit'])->middleware('auth');
Route::get('/events/{id}', [AudioController::class, 'show'])->middleware('auth');
Route::get('/about', [AudioController::Class, 'about']);
Route::get('/equipe', [AudioController::Class, 'equipe']);

Route::get('/manutencao', [AudioController::class, 'manutencao'])->middleware('auth');
Route::get('/equipamentos', [AudioController::class, 'equipamentos'])->middleware('auth');

Route::delete('/events/{id}',[AudioController::class, 'destroy'])->middleware('auth');

Route::put('/events/update/{id}', [AudioController::class, 'update'])->middleware('auth');
Route::put('/events/updateProfile/{id}', [AudioController::class, 'updateProfile'])->middleware('auth');
Route::post('/equipamentos', [AudioController::class, 'store']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AudioController::class, 'dashboard'])->middleware('auth');
});
