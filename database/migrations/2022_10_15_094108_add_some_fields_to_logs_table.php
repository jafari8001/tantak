<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('logs', function (Blueprint $table) {
            $table->string('token')->after('user_agent_client')->nullable();
            $table->text('request')->after('token')->nullable();
            $table->text('response')->after('request')->nullable();
            $table->string('message')->after('response')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('logs', function (Blueprint $table) {
            $table->dropColumn('token');
            $table->dropColumn('request');
            $table->dropColumn('response');
            $table->dropColumn('message');
        });
    }
};
