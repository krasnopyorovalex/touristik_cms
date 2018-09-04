<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('count');
            $table->string('icon', 32);
            $table->string('name', 255);
            $table->unsignedTinyInteger('pos')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_counts');
    }
}
