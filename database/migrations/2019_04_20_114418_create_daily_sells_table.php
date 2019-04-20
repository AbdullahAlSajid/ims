<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailySellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_sells', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sells_point_name');
            $table->integer('product_id')->unsigned();
            $table->integer('quantity');
            $table->integer('customer_id')->unsigned();
            $table->integer('paid_amount');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')->on('products');
            $table->foreign('customer_id')
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
        Schema::dropIfExists('daily_sells');
    }
}
