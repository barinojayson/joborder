<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_offer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('deal_id');
            $table->enum('offer_type',['p','d']);
            $table->integer('product_id');
            $table->integer('quantity');
            $table->double('amount');
            $table->float('percent');
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
        Schema::dropIfExists('deal_offer');
    }
}
