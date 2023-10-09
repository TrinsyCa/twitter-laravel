<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tweets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->integer("userId");
            $table->string("text");
            $table->string("link");
            $table->string("file");
            $table->string("date");

            $table->longText("like")->nullable();
            $table->longText("review")->nullable();
            $table->longText("retweet")->nullable();
            $table->bigInteger("view")->nullable();
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
        Schema::dropIfExists('tweets');
    }
}
