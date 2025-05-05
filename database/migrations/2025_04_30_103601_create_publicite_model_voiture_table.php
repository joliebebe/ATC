<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubliciteModelVoitureTable extends Migration
{
    public function up()
    {
        Schema::create('publicite_model_voiture', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publicite_id')->constrained('publicites')->onDelete('cascade');
            $table->foreignId('model_voiture_id')->constrained('model_voitures')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publicite_model_voiture');
    }
}