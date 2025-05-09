<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\StoreRentalRequest;
use App\Models\StorePurchaseVehicle;
use App\Models\storeVisit;
use App\Models\storePurchasePiece;
use App\Models\getCategory;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function StoreRentalRequest(Request $request)
    {
        try {
            // Validation des données
            $validated = $request->validate([
                'marque_id' => 'required|exists:marques,id',
                'modelVoiture_id' => 'required|exists:model_voitures,id',
                'categorie_id' => 'required|exists:categories,id',
                'date_debut' => 'required|date|date_format:Y-m-d|after_or_equal:today',
                'date_fin' => 'required|date|date_format:Y-m-d|after:date_debut',
            ]);

            // Vérifiez que la catégorie appartient au modèle
            $categorie = getCategory::where('id', $validated['categorie_id'])
                ->where('model_voiture_id', $validated['modelVoiture_id'])
                ->first();

            if (!$categorie) {
                return response()->json([
                    'message' => 'La catégorie sélectionnée n\'appartient pas au modèle choisi.',
                    'statut' => 'error'
                ], 400);
            }

            // Créez la demande
            $demande = StoreRentalRequest::create($validated);

            return response()->json([
                'message' => 'Demande de location enregistrée avec succès.',
                'statut' => 'success',
                'data' => $demande
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur interne du serveur.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
     public function StorePurchaseVehicle(Request $request)
    {
        try {
            // Validation des données
            $validated = $request->validate([
                'marque_id' => 'required|exists:marques,id',
                'model_id' => 'required|exists:model_voitures,id',
                'informations' => 'required|string|max:255',
                'date_souhaitee' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            ]);
    
            // Créez la demande
            $demande = StorePurchaseVehicle::create($validated);
    
            return response()->json([
                'message' => 'Demande enregistrée avec succès',
                'statut' => 'success',
                'data' => $demande
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur interne du serveur.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function storeVisit(Request $request)
    {
        try {
            // Validation des données
            $validated = $request->validate([
                'marque_id' => 'required|exists:marques,id',
                'model_id' => 'required|exists:model_voitures,id', // Remplacez 'modelVoiture_id' par 'model_id'
                'immatricule' => 'required|string|max:255',
                'chassis' => 'required|string|max:255',
                'kilometrage' => 'required|integer|min:0',
                'objet' => 'required|string|max:255',
                'date_souhaitee' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            ]);

            // Créez la demande
            $demande = storeVisit::create($validated);

            return response()->json([
                'message' => 'Demande enregistrée avec succès',
                'statut' => 'success',
                'data' => $demande
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur interne du serveur.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

     public function storePurchasePiece(Request $request)
    {
        try {
            // Validation des données
            $validated = $request->validate([
                'marque_id' => 'required|exists:marques,id',
                'modelVoiture_id' => 'required|exists:model_voitures,id',
                'immatricule' => 'required|string|max:255',
                'chassis' => 'required|string|max:255',
                'piece_nom' => 'required|string|max:255',
                'quantite' => 'required|integer|min:1',
                'informations' => 'nullable|string|max:255',
                'date_souhaitee' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            ]);
    
            // Créez la demande
            $demande = storePurchasePiece::create($validated);
    
            return response()->json([
                'message' => 'Demande de pièce enregistrée avec succès',
                'statut' => 'success',
                'data' => $demande
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur interne du serveur.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
