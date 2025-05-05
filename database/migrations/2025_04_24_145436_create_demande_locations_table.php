<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('demande_locations', function (Blueprint $table) {
            $table->id();
            $table->string('categorie');
            $table->foreignId('marque_id')->constrained('marques');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('demande_locations');
    }
}
