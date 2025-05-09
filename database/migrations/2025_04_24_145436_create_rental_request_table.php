<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalRequestTable extends Migration
{
    public function up()
    {
        Schema::create('rental_request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marque_id'); // Clé étrangère pour la marque
            $table->unsignedBigInteger('categorie_id'); // Clé étrangère pour la catégorie
            $table->unsignedBigInteger('modelVoiture_id'); // Clé étrangère pour le modèle de voiture
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();

            // Définir les clés étrangères
            $table->foreign('categorie_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('modelVoiture_id')->references('id')->on('get_model_cars')->onDelete('cascade');
            $table->foreign('marque_id')->references('id')->on('get_brands')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rental_request');
    }
}
