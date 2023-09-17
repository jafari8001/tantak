<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->string('alias');
            $table->uuid('parent')->nullable();
            $table->enum('type', ['web', 'app']);
            $table->string('icon')->default('_empty_');
            $table->boolean('is_menu')->default(false);

            $table->timestamps();
            $table->softDeletes();
            $table->uuid('created_by');
            $table->integer('sort')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('actions');
    }
}
