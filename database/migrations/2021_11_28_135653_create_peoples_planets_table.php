<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplesPlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples_planets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('people_id');
            $table->foreign('people_id')->references('id')->on('peoples')->onDelete('cascade');

            $table->unsignedBigInteger('planet_id');
            $table->foreign('planet_id')->references('id')->on('planets')->onDelete('cascade');
            
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
        Schema::dropIfExists('peoples_planets');
    }
}
