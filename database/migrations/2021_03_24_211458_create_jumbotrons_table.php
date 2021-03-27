<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJumbotronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumbotrons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('picture');
            $table->string('title');
            $table->text('sentence');
            $table->string('btnname')->nullable();
            $table->string('btnlink')->nullable();
            $table->enum('textalign', ['center', 'left', 'right']);
            $table->enum('justifycontent', ['start', 'end', 'center']);
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
        Schema::dropIfExists('jumbotrons');
    }
}
