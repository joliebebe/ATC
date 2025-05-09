<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\getModelCar;
use Illuminate\Http\JsonResponse;

class ModelController extends Controller
{
    /**
     * Retourne tous les modèles de voitures.
     */
    public function index(): JsonResponse
    {
        $models = getModelCar::all();

        return response()->json([
            'resultat' => $models,
            'message' => 'Liste des modèles récupérée avec succès',
            'statut' => 'success'
        ]);
    }
}