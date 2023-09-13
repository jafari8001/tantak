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
        Schema::create('log_prices', function(Blueprint $table){
            $table->uuid('id')->primary();

            $table->uuid('varcomb_id')->nullable();
            $table->foreign('varcomb_id')->references('id')->on('product_variation_combinations');

            $table->uuid('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->bigInteger('price');

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->default(9999);
            $table->uuid('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->index('varcomb_id');
            $table->index('product_id');
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
};
