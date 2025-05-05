<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// MIGRATION: create_publicites_table.php
class CreatePublicitesTable extends Migration
{
    public function up()
    {
        Schema::create('publicites', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->text('type1') ;
            $table->text('type2') ;
            $table->text('type3') ;
            $table->string('image_principale');
            $table->json('images_secondaires')->nullable(); // Stocke les images secondaires sous forme de JSON
            $table->unsignedBigInteger('prix');
            $table->boolean('etat')->default(1);
            $table->foreignId('marque_id')->constrained('marques')->onDelete('cascade');
            $table->foreignId('model_id')->nullable()->constrained('model_voitures')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publicites');
    }
}

