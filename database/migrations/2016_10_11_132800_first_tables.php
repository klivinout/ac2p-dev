<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FirstTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->integer('created_by')->default(1);
            $table->timestamps();
        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->text('description');
        });

        Schema::create('privileges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->integer('task_id');
            $table->integer('created_by');
            $table->timestamps();

            //$table->foreign('role_id')->references('id')->on('roles');
            //$table->foreign('task_id')->references('id')->on('tasks');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('worker_id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('role_id');
            $table->string('picture', 255);
            $table->rememberToken();
            $table->timestamps();

            //$table->foreign('worker_id')->references('id')->on('workers');
            //$table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
