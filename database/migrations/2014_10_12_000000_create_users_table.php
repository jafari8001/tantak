<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('username');
            $table->string('password');
            $table->date('birth_date')->nullable();
            $table->text('description')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('national_code')->nullable();
            $table->uuid('country_division_id')->nullable();
            $table->string('avatar')->default('upload/baseUpload/default.jpg');
            $table->enum('person_type', ['real', 'legal', 'none'])->default('real')->nullable();
            $table->enum('status', ['active', 'hidden', 'inactive', 'registering', 'suspended']);

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->default(9999);
            $table->uuid('created_by')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
