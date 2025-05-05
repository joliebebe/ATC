<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// MIGRATION: create_demande_visites_table.php
class CreateDemandeVisitesTable extends Migration
{
    public function up()
    {
        Schema::create('demande_visites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marque_id')->constrained('marques');
            $table->foreignId('model_id')->constrained('model_voitures');
            $table->date('date_rendez_vous');
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('demande_visites');
    }
}
