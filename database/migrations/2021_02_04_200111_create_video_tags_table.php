<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('videos_id');
            $table->unsignedBigInteger('tags_id');
            $table->foreign('videos_id')->references('id')->on('videos');
            $table->foreign('tags_id')->references('id')->on('tags');
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
        Schema::dropIfExists('videos_tags');
    }
}
