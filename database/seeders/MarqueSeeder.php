<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marque;
use Illuminate\Support\Facades\DB;

class MarqueSeeder extends Seeder
{
    public function run(): void
    {
        // Désactiver les contraintes de clés étrangères
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Supprime toutes les données existantes
        Marque::truncate();

        // Réactiver les contraintes de clés étrangères
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Assurez-vous que les fichiers existent dans storage/app/public/logos
        $logosPath = 'logos/';

        Marque::create([
            'nom' => 'Nissan',
            'logo' => $logosPath . 'Nissan.png',
            'etat' => 1
        ]);

        Marque::create([
            'nom' => 'Volkswagen',
            'logo' => $logosPath . 'volkswagen.png', 
            'etat' => 1
        ]);

        Marque::create([
            'nom' => 'Venucia',
            'logo' => $logosPath . 'Venucia.png',
            'etat' => 1
        ]);

        Marque::create([
            'nom' => 'New Holland',
            'logo' => $logosPath . 'Holland.png',
            'etat' => 1
        ]);
    }
}
