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
        Schema::create('product_infos', function(Blueprint $table){
            $table->uuid('id')->primary();

            $table->uuid('product_id')->index();
            $table->foreign('product_id')->references('id')->on('products');

            $table->string('ability');
            $table->text('description');
            $table->enum('type',['table_item','description','seo_description','summerized_description'])->index();

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
