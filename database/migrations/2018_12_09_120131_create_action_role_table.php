<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionRoleTable extends Migration
{
    public function up()
    {
        Schema::create('action_role', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('role_id');
            $table->uuid('action_id');

            $table->timestamps();
            $table->softDeletes();
            $table->uuid('created_by')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('action_id')->references('id')->on('actions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('action_role');
    }
}
