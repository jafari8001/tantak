<?php

use Faker\Core\Uuid;
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
        Schema::create('products', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('barcode',16);
            $table->integer('base_price')->nullable();
            $table->integer('base_wholesale_price')->nullable();
            $table->integer('wholesale_unit')->nullable();
            $table->string('main_image')->nullable();
            $table->integer('star')->default(0);
            $table->integer('like')->default(0);
            $table->integer('view')->default(0);
            $table->enum('publish_status',["published_online", "published_inplace", "published_everywhere", "draft"])->default('draft');

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->default(9999);
            $table->uuid('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            
            $table->index('name');
            $table->index('slug');
            $table->index('view');
            $table->index('star');
            $table->index('base_price');
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
