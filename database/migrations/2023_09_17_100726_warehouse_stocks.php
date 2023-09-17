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
        Schema::create('warehouse_stocks', function(Blueprint $table){
            $table->uuid('id')->primary();
            
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');  

            $table->uuid('varcomb_id');
            $table->foreign('varcomb_id')->references('id')->on('product_variation_combinations');

            $table->bigInteger('stock')->nullable();
            $table->bigInteger('saved_stock')->nullable();

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
