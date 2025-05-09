<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasePiecesTable extends Migration
{
    public function up()
    {
        Schema::create('purchase_pieces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marque_id');
            $table->unsignedBigInteger('modelVoiture_id');
            $table->string('immatricule');
            $table->string('chassis');
            $table->string('piece_nom');
            $table->integer('quantite');
            $table->string('informations')->nullable();
            $table->date('date_souhaitee');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchase_pieces');
    }
}