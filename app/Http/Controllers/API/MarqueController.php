<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Marque;
use Illuminate\Http\JsonResponse;

class MarqueController extends Controller
{
    public function index(): JsonResponse
    {
        $marques = Marque::with('models')->get();

        return response()->json([
            'resultat' => $marques,
            'message' => 'Liste des marques avec leurs modèles récupérée avec succès',
            'statut' => 'success'
        ]);
    }
}