<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('courses_id');
            $table->string('status');
            $table->timestamps();
             ///foreign key
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('courses_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainees');
    }
}
