<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubliciteModelCarsTable extends Migration
{
    public function up()
    {
        Schema::create('publicite_model_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publicite_id')->constrained('get_advertisements')->onDelete('cascade');
            $table->foreignId('model_voiture_id')->constrained('get_model_cars')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publicite_model_cars');
    }
}