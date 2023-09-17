<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->boolean('is_default')->default(true);

            $table->timestamps();
            $table->softDeletes();
            $table->uuid('created_by');
            $table->integer('sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
