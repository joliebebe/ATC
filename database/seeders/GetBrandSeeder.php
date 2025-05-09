<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\getBrand;
use Illuminate\Support\Facades\DB;

class GetBrandSeeder extends Seeder
{
    public function run(): void
    {
        // Désactiver les contraintes de clés étrangères
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Supprime toutes les données existantes
        getBrand::truncate();

        // Réactiver les contraintes de clés étrangères
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Assurez-vous que les fichiers existent dans storage/app/public/logos
        $logosPath = 'logos/';

        getBrand::create([
            'nom' => 'Nissan',
            'logo' => $logosPath . 'Nissan.png',
            'etat' => 1
        ]);

        getBrand::create([
            'nom' => 'Volkswagen',
            'logo' => $logosPath . 'volkswagen.png', 
            'etat' => 1
        ]);

        getBrand::create([
            'nom' => 'Venucia',
            'logo' => $logosPath . 'Venucia.png',
            'etat' => 1
        ]);

        getBrand::create([
            'nom' => 'New Holland',
            'logo' => $logosPath . 'Holland.png',
            'etat' => 1
        ]);
    }
}
