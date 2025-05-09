<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// MIGRATION: create_publicites_table.php
class CreateGetAdvertisementsTable extends Migration
{
    public function up()
    { 
        Schema::create('get_advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('image_principale');
            $table->json('images_secondaires')->nullable();
            $table->string('type1')->nullable();
            $table->string('type2')->nullable();
            $table->string('type3')->nullable();
            $table->unsignedBigInteger('prix');
            $table->boolean('etat')->default(1);
            $table->foreignId('marque_id')->constrained('get_brands')->onDelete('cascade');
            $table->foreignId('model_id')->constrained('get_model_cars')->onDelete('cascade'); // Clé étrangère correcte
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('get_advertisements');
    }
}

