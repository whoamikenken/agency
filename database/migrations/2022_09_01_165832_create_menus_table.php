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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('root', 20)->nullable()->default('NULL');
            $table->string('title', 20)->nullable()->default('NULL');
            $table->string('link', 20)->nullable()->default('NULL');
            $table->string('description', 100)->nullable()->default('NULL');
            $table->string('icon', 40)->nullable()->default('<i class="bi bi-motherboard"></i>');
            $table->string('status', 20)->nullable()->default('show');
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->timestamp('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
