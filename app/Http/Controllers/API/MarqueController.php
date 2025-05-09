<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\getBrand;
 use Illuminate\Http\JsonResponse;

class MarqueController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            // Essaie de récupérer les marques (ou adaptez-le selon ta structure)
            $marques = getBrand::all();

            return response()->json([
                'resultat' => $marques,
                'message' => 'Liste des marques récupérée avec succès',
                'statut' => 'success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Une erreur est survenue',
                'error' => $e->getMessage(),
                'statut' => 'error'
            ], 500);
        }
    }
}
