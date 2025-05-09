<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\getAdvertisement;

class PubliciteController extends Controller
{
    public function index()
    {
        try {
            $publicites = getAdvertisement::with(['marque', 'model'])->get();

            return response()->json([
                'resultat' => $publicites,
                'message' => 'Liste des publicités récupérée avec succès',
                'statut' => 'success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur lors de la récupération des publicités',
                'erreur' => $e->getMessage(),
            ], 500);
        }
    }
}
