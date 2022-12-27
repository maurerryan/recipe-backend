<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->string('ingredient');
            $table->string('denomination');
            $table->string('measurement');
            $table->string('food_category');
            $table->integer('recipe_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('ingredients', function(Blueprint $table) {
            $table->foreign('recipe_id')->references('recipe_id')->on('recipes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
};
