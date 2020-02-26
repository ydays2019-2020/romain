<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantalons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->longText('description');
            $table->string('prix');
            $table->string('image');
            $table->string('tailleS');
            $table->string('tailleM');
            $table->string('tailleL');
            $table->string('tailleXL');
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
        Schema::dropIfExists('pantalons');
    }
}