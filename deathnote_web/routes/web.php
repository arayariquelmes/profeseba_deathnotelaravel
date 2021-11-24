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

Route::get('/', function () {
    return view('welcome');
});
Route::view("/agregar_causa","agregar_causa")->name("agregar_causa");
Route::view("/ver_causas","ver_causas")->name("ver_causas");
Route::view("/asesinar","asesinar")->name("asesinar");
Route::view("/revisar_libreta","revisar_libreta")->name("revisar_libreta");