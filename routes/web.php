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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/hola/{variable?}', function ($variable = "Invitado") {
    return "¡Hola, $variable!";
});

Route::resource('dashboard/tele-practicante', App\Http\Controllers\Dashboard\TelePracticanteController::class);
Route::resource('dashboard/tele-empresa', App\Http\Controllers\Dashboard\TeleEmpresaController::class);
Route::resource('dashboard/tele-institucion', App\Http\Controllers\Dashboard\TeleInstitucionController::class);
