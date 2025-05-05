<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// MIGRATION: create_demande_pieces_table.php
class CreateDemandePiecesTable extends Migration
{
    public function up()
    {
        Schema::create('demande_pieces', function (Blueprint $table) {
            $table->id();
            $table->string('Num_immatricule');
            $table->string('Num_chassis');
            $table->foreignId('marque_id')->constrained('marques');
            $table->foreignId('model_id')->constrained('model_voitures');
            $table->integer('quantite');
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('demande_pieces');
    }
}
