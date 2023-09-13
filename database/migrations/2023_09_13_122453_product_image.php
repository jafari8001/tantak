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
        Schema::create('product_images', function(Blueprint $table){
            $table->uuid('id')->primary();

            $table->uuid('product_variation_id');
            $table->foreign('product_variation_id')->references('id')->on('product_variations');
            
            $$table->uuid('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->string('alt')->nullable();
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('size')->nullable();
            $table->string('path');

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->default(9999);
            $table->uuid('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');


            $table->index('product_id');
            $table->index('product_variation_id');
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
