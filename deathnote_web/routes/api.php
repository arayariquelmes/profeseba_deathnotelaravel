<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CausasMuerteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas de causa de muerte

Route::get("causas/get", [CausasMuerteController::class, "obtenerTodos"]);
Route::post("causas/post", [CausasMuerteController::class, "ingresar"]);
Route::post("causas/delete", [CausasMuerteController::class, "eliminar"]);
Route::post("causas/actualizar", [CausasMuerteController::class,"actualizar"]);
