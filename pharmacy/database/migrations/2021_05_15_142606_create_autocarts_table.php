<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutocartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autocarts', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->integer('user_id');
            $table->integer('money_amount');
            $table->integer('days');
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
        Schema::dropIfExists('autocarts');
    }
}
