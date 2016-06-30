<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneNums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('members_phone_nums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->enum('type', ['phone', 'mobile']);
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });

        Schema::create('users_phone_nums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->enum('type', ['phone', 'mobile']);
            $table->integer('user_id')->unsigned();
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
        Schema::drop('members_phone_nums');
        Schema::drop('users_phone_nums');
    }
}
