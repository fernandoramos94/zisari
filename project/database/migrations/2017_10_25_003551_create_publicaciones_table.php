<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{

    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->text('messaje');

            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
}
