<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\getCategory;
use Illuminate\Http\JsonResponse;

class CategorieController extends Controller
{
    /**
     * Retourne tous les catégories de voitures.
     */
    public function index(): JsonResponse
    {
        $categories = getCategory::all();

        return response()->json([
            'resultat' => $categories,
            'message' => 'Liste des catégories récupérée avec succès',
            'statut' => 'success'
        ]);
    }
}