<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logoimg', function (Blueprint $table) {
            $table->increments('id');
            $table->text('longImage')->nullable();
            $table->text('minImage')->nullable();
            $table->string('tooltip')->nullable();
            $table->string('url')->nullable();
            $table->string('country')->nullable();
            $table->dateTime('startDate');
            $table->dateTime('endDate');
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
        Schema::dropIfExists('logoimg');
    }
}
