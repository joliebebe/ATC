<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelVoiture;

class ModelVoitureSeeder extends Seeder
{
    public function run(): void
    {
        // Modèles pour Nissan
        ModelVoiture::create(['nom' => 'Navara', 'marque_id' => 1]);
        ModelVoiture::create(['nom' => 'Kicks', 'marque_id' => 1]);
        ModelVoiture::create(['nom' => 'Qashqai', 'marque_id' => 1]);

        // Modèles pour Volkswagen
        ModelVoiture::create(['nom' => 'Tiguan', 'marque_id' => 2]);
        ModelVoiture::create(['nom' => 'T-roc', 'marque_id' => 2]);
        ModelVoiture::create(['nom' => 'Passat', 'marque_id' => 2]);

        // Modèles pour Venucia
        ModelVoiture::create(['nom' => 'D50', 'marque_id' => 3]);
        ModelVoiture::create(['nom' => 'T60', 'marque_id' => 3]);
        ModelVoiture::create(['nom' => 'T90', 'marque_id' => 3]);

        // Modèles pour New Holland
        ModelVoiture::create(['nom' => 'T7', 'marque_id' => 4]);
        ModelVoiture::create(['nom' => '95 HP', 'marque_id' => 4]);
        ModelVoiture::create(['nom' => 'T8', 'marque_id' => 4]);
    }
}