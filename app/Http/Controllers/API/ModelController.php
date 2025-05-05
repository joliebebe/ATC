<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ModelVoiture;
use Illuminate\Http\JsonResponse;

class ModelController extends Controller
{
    /**
     * Retourne tous les modèles de voitures.
     */
    public function index(): JsonResponse
    {
        $models = ModelVoiture::all();

        return response()->json([
            'resultat' => $models,
            'message' => 'Liste des modèles récupérée avec succès',
            'statut' => 'success'
        ]);
    }
}