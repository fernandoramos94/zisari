<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firtName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('day')->nullable();
            $table->string('mounth')->nullable();
            $table->string('year')->nullable();
            $table->string('gender')->nullable();
            $table->string('numberPhone')->nullable();
            $table->string('document')->nullable();
            $table->string('email')->unique();
            $table->string('country')->nullable();
            $table->text('coverPhoto')->nullable();
            $table->text('profilePhoto')->nullable();

            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');
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
        Schema::dropIfExists('usuarios');
    }
}
