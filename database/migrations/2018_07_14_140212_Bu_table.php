<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BUTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BU', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bu_name',100);
            $table->string('bu_price',20);
            $table->tinyInteger('bu_rent');
            $table->string('bu_square',10);
            $table->tinyInteger('bu_type');
            $table->string('bu_small_des',160);
            $table->string('bu_meta',200);
            $table->string('bu_langtuide',50);
            $table->string('bu_latitude',50);
            $table->longText('bu_large_dis');
            $table->tinyInteger('bu_status');
            $table->timestamps();
            $table->unsignedInteger('user_id');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
