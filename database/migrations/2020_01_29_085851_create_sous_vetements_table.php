<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousVetementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_vetements', function (Blueprint $table) {
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
        Schema::dropIfExists('sous_vetements');
    }
}
