<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Nom de la catégorie
            $table->unsignedBigInteger('model_voiture_id'); // Relation avec le modèle de voiture
            $table->timestamps();

            // Clé étrangère
            $table->foreign('model_voiture_id')->references('id')->on('get_model_cars')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
}