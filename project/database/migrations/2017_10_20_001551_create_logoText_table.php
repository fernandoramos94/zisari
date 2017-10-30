<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoTextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logotext', function (Blueprint $table) {
            $table->increments('id');
            $table->string('longTitle')->nullable();
            $table->string('minTitle')->nullable();
            $table->string('tooltip')->nullable();
            $table->string('country')->nullable();
            $table->dateTime('startDate')->nullable();
            $table->dateTime('endDate')->nullable();

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
        Schema::dropIfExists('logotext');
    }
}
