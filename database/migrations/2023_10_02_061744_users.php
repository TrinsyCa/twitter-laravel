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

            //User Details
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->string('username')->nullable();
<<<<<<< HEAD
            $table->string('name')->nullable()->charset('utf8mb4');
            $table->string('country')->nullable()->charset('utf8mb4');
            $table->string('gender')->nullable()->charset('utf8mb4');
=======
            $table->string('name')->nullable();
            $table->string('country')->nullable();
            $table->string('gender')->nullable();
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513

            //Profile Details
            $table->longText('profilepic')->nullable();
            $table->longText('banner')->nullable();
<<<<<<< HEAD
            $table->string('about')->nullable()->charset('utf8mb4');
            $table->string('birthday')->nullable();
            $table->string('location')->nullable()->charset('utf8mb4');
=======
            $table->string('about')->nullable();
            $table->string('birthday')->nullable();
            $table->string('location')->nullable();
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
            $table->string('website')->nullable();
            $table->string('confirm')->nullable();
            $table->string('notifications')->nullable();

            //Statistic
            $table->longText('followers')->nullable();
            $table->longText('follows')->nullable();
            $table->longText('ban')->nullable();

            //Create At - Update At
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
