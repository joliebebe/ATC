<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// MIGRATION: create_demande_purchase_vehicles_table.php
class CreatePurchaseVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('purchase_vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marque_id');
            $table->unsignedBigInteger('model_id');
            $table->string('informations');
            $table->date('date_souhaitee');
            $table->timestamps(); // Ajout des colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchase_vehicles');
    }
}