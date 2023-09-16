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
        Schema::create('addresses', function(Blueprint $table){
            $table->uuid('id')->primary();

            $table->uuid('user_id')->index();
            $table->foreign('user_id')->on('users')->references('id');

            $table->string('postal_code',20);
            $table->text('address');
            
            $table->uuid('country_division_id')->nullable();
            $table->foreign('country_division_id')->on('country_divisions')->references('id');

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->default(9999);
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
