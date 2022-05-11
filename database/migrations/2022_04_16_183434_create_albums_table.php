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
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->integer('artist_id');
            $table->string('name');
            $table->string('genre');
            $table->string('artwork');
            $table->integer('nos');
            $table->string('songs');
            $table->string('song_title');
            $table->integer('downloads');
            $table->integer('plays');
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
        Schema::dropIfExists('albums');
    }
};
