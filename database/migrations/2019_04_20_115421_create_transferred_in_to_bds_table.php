<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferredInToBdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferred_in_to_bds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reciever_id')->unsigned();
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('reciever_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transferred_in_to_bds');
    }
}
