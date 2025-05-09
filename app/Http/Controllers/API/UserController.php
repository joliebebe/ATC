<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update(Request $request)
    {
        try {
            // Validation des données
            $validated = $request->validate([
                'email' => 'required|email|exists:users,email',
                'nom' => 'required|string|max:255',
                'prenoms' => 'required|string|max:255',
                'telephone' => 'required|string|max:20',
            ]);

            // Récupérer l'utilisateur par email
            $user = User::where('email', $validated['email'])->first();

            if (!$user) {
                return response()->json([
                    'message' => 'Utilisateur non trouvé.',
                    'statut' => 'error',
                ], 404);
            }

            // Mettre à jour les informations de l'utilisateur
            $user->update([
                'firstname' => $validated['prenoms'],
                'lastname' => $validated['nom'],
                'phone' => $validated['telephone'],
            ]);

            return response()->json([
                'message' => 'Informations mises à jour avec succès.',
                'statut' => 'success',
                'data' => $user,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur interne du serveur.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function register(Request $request)
    {
        try {
            $validated = $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|string|max:20',
                'password' => 'required|string|min:6|confirmed',
            ]);

            $user = User::create([
                'firstname' => $validated['firstname'],
                'lastname' => $validated['lastname'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make($validated['password']),
            ]);

            return response()->json([
                'message' => 'Utilisateur enregistré avec succès.',
                'statut' => 'success',
                'data' => $user,
            ]);
        }   catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur interne du serveur.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            // Validation des données
            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ]);

            // Vérifiez si l'utilisateur existe
            $user = User::where('email', $validated['email'])->first();

            if (!$user || !Hash::check($validated['password'], $user->password)) {
                return response()->json([
                    'message' => 'Identifiants incorrects.',
                    'statut' => 'error',
                ], 401);
            }

            // Générer un token d'authentification
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'Connexion réussie.',
                'statut' => 'success',
                'data' => [
                    'user' => $user,
                    'token' => $token,
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur interne du serveur.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function logout(Request $request)
    {
        try {
            // Révoquer le token d'authentification de l'utilisateur
            $request->user()->currentAccessToken()->delete();

            return response()->json([
                'message' => 'Déconnexion réussie.',
                'statut' => 'success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur interne du serveur.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function getProfile(Request $request)
    {
        try {
            $user = $request->user(); // récupère l'utilisateur connecté via Sanctum

            return response()->json([
                'message' => 'Profil utilisateur récupéré avec succès.',
                'statut' => 'success',
                'data' => $user,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur interne du serveur.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
