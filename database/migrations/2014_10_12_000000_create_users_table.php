<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('pais')->nullable();
            $table->string('genero')->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('dia')->nullable();
            $table->string('mes')->nullable();
            $table->string('anio')->nullable();
            $table->string('numeroCelular')->nullable();
            $table->string('documento')->nullable();
            $table->string('correo')->unique();
            $table->text('portado')->nullable();
            $table->text('imagen')->nullable();
            $table->string('ip')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
