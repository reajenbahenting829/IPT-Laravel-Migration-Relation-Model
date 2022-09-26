<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainors', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('users_id');
            $table->string('specialty');
            $table->timestamps();
            //foreign key
            $table->foreign('users_id')->references('id')->on('users');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainors');
    }
}
