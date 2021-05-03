<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->integer('manufacturerId');
            $table->string('medicineName');
            $table->string('generic');
            $table->string('type');
            $table->string('quantity');
            $table->string('dose');
            $table->float('medicinePrice');
            $table->integer('stock');
            $table->string('description');
            $table->string('medicineImage')->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
