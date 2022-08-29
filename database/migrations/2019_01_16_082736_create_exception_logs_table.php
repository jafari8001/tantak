<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExceptionLogsTable extends Migration
{
    public function up()
    {
        Schema::create('exception_logs', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('line')->nullable();
            $table->string('code')->nullable();
            $table->string('file')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->nullable();
            $table->string("user_agent_client")->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->integer('sort')->default(9999);
            $table->uuid('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('exception_logs');
    }
}
