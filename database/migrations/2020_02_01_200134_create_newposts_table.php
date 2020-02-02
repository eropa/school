<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('groupnew_id');
            $table->foreign('groupnew_id')->references('id')->on('groupnews');
            $table->string('name');
            $table->string('slug');
            $table->text('textsmallhtml');
            $table->text('textsfullhtml');
            $table->string('foto');
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
        Schema::dropIfExists('newposts');
    }
}
