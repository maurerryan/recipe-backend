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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->string('title');
            $table->text('note');
            $table->integer('recipe_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('notes', function(Blueprint $table) {
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
        Schema::dropIfExists('notes');
    }
};
