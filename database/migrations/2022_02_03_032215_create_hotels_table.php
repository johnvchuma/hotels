<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('lprice');
            $table->integer('sprice');
            $table->integer('hprice');
            $table->string('television')->nullable();
            $table->string('wifi')->nullable();
            $table->string('breakfast')->nullable();
            $table->string('phone');
            $table->integer('rooms');
            $table->string('main');
            $table->string('others');
            $table->string('city');

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
        Schema::dropIfExists('hotels');
    }
}
