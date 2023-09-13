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
        Schema::create('product_variations', function(Blueprint $table){
            $table->uuid('id')->primary();
            
            $table->uuid('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->uuid('variation_type_id');
            $table->foreign('variation_type_id')->references('id')->on('settings');
            
            $table->string('value');
            
            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->default(9999);
            $table->uuid('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->index("product_id");
            $table->index("variation_type_id");
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
