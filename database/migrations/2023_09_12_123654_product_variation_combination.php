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

            $table->uuid('variation_1_id')->nullable()->index(); 
            $table->foreign('variation_1_id')->references('id')->on('product_variations');

            $table->uuid('variation_2_id')->nullable()->index(); 
            $table->foreign('variation_2_id')->references('id')->on('product_variations');

            $table->uuid('variation_3_id')->nullable()->index(); 
            $table->foreign('variation_3_id')->references('id')->on('product_variations');

            $table->bigInteger('price')->index();
            $table->integer('maximum')->nullable();
            $table->integer('minimum')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('stock')->default(0)->index();
            $table->enum('sell_type', ['single','wholesale'])->default('single')->index();

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
        //
    }
};
