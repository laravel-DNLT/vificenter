<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function(Blueprint $table) {
            $table->increments('id');
            $table->string('Ten');
            $table->string('Tag');
            $table->string('Url');
            $table->integer('LuotXem')->default();
            $table->longText('Descriptions');
            $table->integer('idDanhMuc')->unsigned();
            $table->foreign('idDanhMuc')->references('id')->on('danhmuc');
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
        Schema::drop('video');
    }
}
