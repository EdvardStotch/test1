<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_type_id')->unsigned()->nullable();
            $table->integer('group_id')->unsigned()->nullable();
            $table->string('first_name', '60');
            $table->string('last_name', '60');
            $table->string('email', '100');
            $table->string('password', '60');
            $table->string('remember_token', '150')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('activation_token', '34')->nullable();
            $table->integer('created_question_count')->nullable();
            $table->integer('answer_count')->nullable();
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
