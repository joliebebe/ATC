<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('get_brands', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('logo')->nullable();
            $table->boolean('etat')->default(1);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('get_brands');
    }
}

