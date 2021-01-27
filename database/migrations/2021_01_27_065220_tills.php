<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tills', function(Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('status');
            $table->string('till_operator');
            $table->integer('order_in_queue');
            $table->integer('order_delivered');
            $table->integer('last_order_delivered');
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
        //
    }
}