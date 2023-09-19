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
        Schema::create('branch', function (Blueprint $table) {
            $table->uuid('id')->primary();
            
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');  

            $table->uuid('country_division_id')->nullable();
            $table->foreign('country_division_id')->on('country_divisions')->references('id');

            $table->string('name');
            $table->string('branch_code',16);
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('address')->nullable();
            $table->boolean('is_main_branch')->default(false);
            $table->enum('status', ['active', 'hidden', 'inactive', 'suspended']);
            $table->enum('sell_type',['sell', 'wholesale', 'both_sell', 'warehouse'])->default('sell');


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
        Schema::dropIfExists('branch');
    }
};
