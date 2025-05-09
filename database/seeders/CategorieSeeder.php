<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\getCategory;

class CategorieSeeder extends Seeder
{
    public function run()
    {
        getCategory::create(['nom' => 'SUV', 'model_voiture_id' => 1]);
        getCategory::create(['nom' => 'Berline', 'model_voiture_id' => 1]);
        getCategory::create(['nom' => 'Compacte', 'model_voiture_id' => 2]);
        getCategory::create(['nom' => 'Berline', 'model_voiture_id' => 2]);
        getCategory::create(['nom' => 'SUV', 'model_voiture_id' => 3]);
        getCategory::create(['nom' => 'Crossover', 'model_voiture_id' => 3]);
        getCategory::create(['nom' => 'SUV', 'model_voiture_id' => 4]);
        getCategory::create(['nom' => 'Pick-up', 'model_voiture_id' => 4]);
        getCategory::create(['nom' => 'SUV', 'model_voiture_id' => 5]);
        getCategory::create(['nom' => 'Crossover', 'model_voiture_id' => 5]);
        getCategory::create(['nom' => 'Berline', 'model_voiture_id' => 6]);
        getCategory::create(['nom' => 'Compacte', 'model_voiture_id' => 6]);
        getCategory::create(['nom' => 'SUV', 'model_voiture_id' => 7]);
        getCategory::create(['nom' => 'Crossover', 'model_voiture_id' => 7]);
    }
}