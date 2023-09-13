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
        Schema::create('product_info', function(Blueprint $table){
            $table->uuid()->primary();

            $table->uuid('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->enum('type',['table_item','description','seo_description','summerized_description']); # TODO
            $table->string('ability');
            $table->text('description');

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->default(9999);
            $table->uuid('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->index('product_id');
            $table->index('type');
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
