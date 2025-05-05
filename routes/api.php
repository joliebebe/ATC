<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MarqueController;
use App\Http\Controllers\API\DemandeController;
use App\Http\Controllers\API\PubliciteController;
use App\Http\Controllers\Api\ModelController;

Route::get('/models', [ModelController::class, 'index']);
Route::get('/marque', [MarqueController::class, 'index']);
Route::get('/publicites', [PubliciteController::class, 'index']);

Route::post('/demande/location', [DemandeController::class, 'location']);
Route::post('/demande/achat/vehicule', [DemandeController::class, 'achatVehicule']);
Route::post('/demande/visite', [DemandeController::class, 'visite']);
Route::post('/demande/achat/piece', [DemandeController::class, 'piece']);
