<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runnings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->longText('description');
            $table->string('prix');
            $table->string('image');
            $table->string('taille36');
            $table->string('taille37');
            $table->string('taille38');
            $table->string('taille39');
            $table->string('taille40');
            $table->string('taille41');
            $table->string('taille42');
            $table->string('taille43');
            $table->string('taille44');
            $table->string('taille45');
            $table->string('taille46');
            $table->string('taille47');
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
        Schema::dropIfExists('runnings');
    }
}
