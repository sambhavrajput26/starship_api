<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('starships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('model');
            $table->string('manufacturer');
            $table->string('crew_size');
            $table->integer('cost');
            $table->bigInteger('starship_class')->unsigned(20);
            $table->integer('cargo_capacity');
            $table->integer('max_atmosphering_speed');
            $table->integer('MGLT');            
            $table->timestamps();

            $table->foreign('starship_class')->references('id')->on('starship_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('starships');
    }
}
