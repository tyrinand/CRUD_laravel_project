<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('descr');
            $table->string('lan');
            $table->unsignedDecimal('prise', 19, 2);
            $table->string('site');
            $table->integer('count');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('softs');
    }
}
