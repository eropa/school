<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimptimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timptimetables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number_poradok');
            $table->integer('day_number');
            $table->unsignedBigInteger('teachersubjectclass_id');
            $table->foreign('teachersubjectclass_id')->references('id')->on('teachersubjectclasses');
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
        Schema::dropIfExists('timptimetables');
    }
}
