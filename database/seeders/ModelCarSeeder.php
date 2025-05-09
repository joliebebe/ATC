<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\getModelCar;

class ModelCarSeeder extends Seeder
{
    public function run(): void
    {
        // Modèles pour Nissan
        getModelCar::create(['nom' => 'Navara', 'marque_id' => 1]);
        getModelCar::create(['nom' => 'Kicks', 'marque_id' => 1]);
        getModelCar::create(['nom' => 'Qashqai', 'marque_id' => 1]);

        // Modèles pour Volkswagen
        getModelCar::create(['nom' => 'Tiguan', 'marque_id' => 2]);
        getModelCar::create(['nom' => 'T-roc', 'marque_id' => 2]);
        getModelCar::create(['nom' => 'Passat', 'marque_id' => 2]);

        // Modèles pour Venucia
        getModelCar::create(['nom' => 'D50', 'marque_id' => 3]);
        getModelCar::create(['nom' => 'T60', 'marque_id' => 3]);
        getModelCar::create(['nom' => 'T90', 'marque_id' => 3]);

        // Modèles pour New Holland
        getModelCar::create(['nom' => 'T7', 'marque_id' => 4]);
        getModelCar::create(['nom' => '95 HP', 'marque_id' => 4]);
        getModelCar::create(['nom' => 'T8', 'marque_id' => 4]);
    }
}