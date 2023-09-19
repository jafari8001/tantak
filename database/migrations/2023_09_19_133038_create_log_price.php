<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_prices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            
            $table->uuid('varcomb_id');
            $table->foreign('varcomb_id')->references('id')->on('product_variation_combinations');  

            $table->uuid('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');

            $table->bigInteger('previous_price');
            $table->bigInteger('current_price');

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->nullable();
            $table->uuid('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_price');
    }
};
