<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DemandeLocation;
use App\Models\DemandeAchatVehicule;
use App\Models\DemandeVisite;
use App\Models\DemandePiece;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function location(Request $request)
    {
        $demande = DemandeLocation::create($request->all());

        return response()->json([
            'accessToken' => null,
            'message' => 'Demande enregistrée avec succès',
            'statut' => 'success'
        ]);
    }

    public function achatVehicule(Request $request)
    {
        $demande = DemandeAchatVehicule::create($request->all());

        return response()->json([
            'accessToken' => null,
            'message' => 'Demande enregistrée avec succès',
            'statut' => 'success'
        ]);
    }

    public function visite(Request $request)
    {
        $demande = DemandeVisite::create($request->all());

        return response()->json([
            'accessToken' => null,
            'message' => 'Demande enregistrée avec succès',
            'statut' => 'success'
        ]);
    }

    public function piece(Request $request)
    {
        $demande = DemandePiece::create($request->all());

        return response()->json([
            'accessToken' => null,
            'message' => 'Demande enregistrée avec succès',
            'statut' => 'success'
        ]);
    }
}

