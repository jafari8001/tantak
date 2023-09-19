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
        Schema::create('log_stocks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            
            $table->uuid('warehouse_stock_id');
            $table->foreign('warehouse_stock_id')->references('id')->on('warehouse_stocks');  

            $table->uuid('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');

            $table->bigInteger('previous_stock');
            $table->bigInteger('current_stock');
            $table->enum('type', ['sell', 'update']);

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
        Schema::dropIfExists('log_stock');
    }
};
