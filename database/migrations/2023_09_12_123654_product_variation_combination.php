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
        Schema::create('product_variation_combinations', function(Blueprint $table){
            $table->uuid('id')->primary();

            $table->uuid('variation_1_id')->nullable(); 
            $table->foreign('variation_1_id')->references('id')->on('product_variations');

            $table->uuid('variation_2_id')->nullable(); 
            $table->foreign('variation_2_id')->references('id')->on('product_variations');

            $table->uuid('variation_3_id')->nullable(); 
            $table->foreign('variation_3_id')->references('id')->on('product_variations');

            $table->enum('sell_type', ['single','wholesale'])->default('single');
            $table->integer('stock')->default(0);
            $table->integer('discount')->nullable();
            $table->integer('minimum')->nullable();
            $table->integer('maximum')->nullable();
            $table->bigInteger('price');

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->default(9999);
            $table->uuid('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->index('variation_1_id');
            $table->index('variation_2_id');
            $table->index('variation_3_id');
            $table->index('sell_type');
            $table->index('stock');
            $table->index('price');
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
