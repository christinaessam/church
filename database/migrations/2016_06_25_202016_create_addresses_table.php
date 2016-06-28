<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quarter');
            $table->string('street');
            $table->string('zone_location')->nullable();
            $table->string('floor_num');
            $table->string('appartment_num');
            $table->string('home_num');
            $table->string('details')->nullable();
            $table->rememberToken();
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
        Schema::drop('addresses');

    }
}
