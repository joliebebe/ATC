<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// MIGRATION: create_demande_visites_table.php
class CreateVisitTable extends Migration
{
    public function up()
    {
        Schema::create('visit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marque_id');
            $table->unsignedBigInteger('model_id'); // Utilisez 'model_id' pour correspondre à la base de données
            $table->string('immatricule');
            $table->string('chassis');
            $table->integer('kilometrage');
            $table->string('objet');
            $table->date('date_souhaitee');
            $table->timestamps();
    
            // Définir les clés étrangères
            $table->foreign('marque_id')->references('id')->on('get_brands')->onDelete('cascade');
            $table->foreign('model_id')->references('id')->on('get_model_cars')->onDelete('cascade');
        });
    }
    public function down()
    { 
        // Supprimer la table
        Schema::dropIfExists('visit');
    }
}
