<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForekey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('sales', function($table) {
      $table->integer('id_shop');
      $table->integer('id_soft');
      $table->integer('id_discount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('sales', function($table) {
        $table->integer('id_shop');
        $table->integer('id_soft');
        $table->integer('id_discount');
        });
    }
}
