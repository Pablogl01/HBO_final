<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntuacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntuaciones', function (Blueprint $table) {
            $table->id();
		    $table->unsignedBigInteger('videos_id');
		    $table->unsignedBigInteger('user_id');
            $table->integer('p_num');
            $table->timestamps();
            $table->foreign('videos_id')->references('id')->on('videos');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntuaciones');
    }
}
