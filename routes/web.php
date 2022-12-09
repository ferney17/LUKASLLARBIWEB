<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\MesasController;
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
Route::get('/', function(){
return view('index');
});
Route::resource('contactos',ContactosController::class)->middleware('auth');
Route::resource('mesas',MesasController::class)->middleware('auth');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
