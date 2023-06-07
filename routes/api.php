<?php

use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\IntrgradoresController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('registeruser', [UserController::class, 'Userregister']);

Route::group(['middleware' => ["auth:sanctum"]], function () {
    Route::get('users-profile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/integrador', [IntrgradoresController::class, 'index']);
Route::post('/integrador', [IntrgradoresController::class, 'store']);
Route::put('/integrador/{id}', [IntrgradoresController::class, 'update']);
Route::delete('/integrador/{id}', [IntrgradoresController::class, 'destroy']);

Route::get('/estudiantes', [EstudiantesController::class, 'index']);
Route::post('/estudiantes', [EstudiantesController::class, 'store']);
Route::put('/estudiantes/{id}', [EstudiantesController::class, 'update']);
Route::delete('/estudiantes/{id}', [EstudiantesController::class, 'destroy']);
