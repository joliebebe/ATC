<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MarqueController;
use App\Http\Controllers\API\DemandeController;
use App\Http\Controllers\API\PubliciteController;
use App\Http\Controllers\Api\ModelController;
use App\Http\Controllers\Api\CategorieController;
use App\Http\Controllers\Api\UserController;
 
Route::get('/models', [ModelController::class, 'index']);
Route::get('/categories', [CategorieController::class, 'index']);
Route::get('/marque', [MarqueController::class, 'index']);
Route::get('/publicites', [PubliciteController::class, 'index']);

Route::post('/demande/location', [DemandeController::class, 'location']);
Route::post('/demande/achat/vehicule', [DemandeController::class, 'achatVehicule']);
Route::post('/demande/visite', [DemandeController::class, 'visite']);
Route::post('/demande/achat/piece', [DemandeController::class, 'piece']);

Route::put('/user/update', [UserController::class, 'update']);
Route::post('/user/register', [UserController::class, 'register']);
Route::post('/user/login', [UserController::class, 'login']);
Route::post('/user/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');
Route::middleware('auth:sanctum')->get('/user/profile', [UserController::class, 'getProfile']);
