<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->string("password");
            $table->string("name_surname");
            $table->string("about")->nullable();
            $table->string("website")->nullable();
            $table->string("birthday")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("location")->nullable();
            $table->string("country")->nullable();
            $table->string("gender")->nullable();
            $table->string("premium")->nullable();
            $table->string("confirm")->nullable();
            $table->string("theme")->nullable();
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
        Schema::dropIfExists('users');
    }
}
