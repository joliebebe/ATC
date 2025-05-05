<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelVoituresTable extends Migration
{
    public function up()
    {
        Schema::create('model_voitures', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignId('marque_id')->constrained('marques')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('model_voitures');
    }
}
