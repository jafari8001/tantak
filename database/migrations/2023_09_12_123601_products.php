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
            $table->string('name')->index();
            $table->string('slug')->nullable()->index();
            $table->string('barcode',16);
            $table->integer('base_price')->nullable()->index();
            $table->integer('base_wholesale_price')->nullable()->index();
            $table->string('wholesale_unit')->nullable();
            $table->string('main_image')->nullable();
            $table->integer('star')->default(0)->index();
            $table->integer('like')->default(0);
            $table->integer('view')->default(0)->index();
            $table->enum('publish_status',["published_online", "published_inplace", "published_everywhere", "draft"])->default('draft');

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
