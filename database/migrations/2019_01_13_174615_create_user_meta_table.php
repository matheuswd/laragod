<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMetaTable extends Migration
{
    public function up()
    {
        Schema::create('user_meta', function (Blueprint $table) {

            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('avatar')->nullable();

            $table->string('company')->nullable();
            $table->string('position')->nullable();

            $table->string('city')->nullable();
            $table->string('country')->nullable();

            $table->date('birth')->nullable();

            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();

            $table->text('biography')->nullable();
            $table->string('interests')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('user_meta');
    }
}
