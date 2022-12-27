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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id('recipe_id');
            $table->integer('user_id')->unsigned();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->string('preptime')->nullable();
            $table->string('cooktime')->nullable();
            $table->string('servings')->nullable();
            $table->string('calories_per_serving')->nullable();
            $table->string('personal_notes')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Schema::table('recipes', function(Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
