<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('country_divisions', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->uuid('parent_id')->nullable();
            $table->enum('level', ['province', 'township', 'district', 'city', 'rural_district', 'village']);

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->nullable();
            $table->uuid('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('country_divisions');
    }
};
