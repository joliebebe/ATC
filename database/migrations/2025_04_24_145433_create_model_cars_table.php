<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCarsTable extends Migration
{

    public function up()
    {
        Schema::create('get_model_cars', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignId('marque_id')->constrained('get_brands')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('get_model_cars');
    }
}
