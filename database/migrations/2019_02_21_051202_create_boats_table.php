<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameBoat');
            $table->decimal('price',8,2);
            $table->string('cidade');
            $table->decimal('boatSize');//pés
            $table->text('boatDescription');
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
        Schema::dropIfExists('boats');
    }
}
