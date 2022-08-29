<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthTokensTable extends Migration
{
    public function up()
    {
        Schema::create('auth_tokens', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('ip');
            $table->text("user_agent")->nullable();
            $table->date("expired_token_at")->nullable();
            $table->string('auth_token', 250)->nullable();
            $table->string("user_agent_client")->nullable();

            
            $table->timestamps();
            $table->softDeletes();
            $table->uuid('created_by');
            $table->integer('sort')->default(9999);
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('auth_tokens');
    }
}
