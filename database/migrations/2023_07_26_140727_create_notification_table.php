<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('to_user_id');
            $table->integer('from_user_id');
            $table->enum('from_user_type',['user','page']);
            $table->string('action');
            $table->string('node_type');
            $table->string('node_url');
            $table->text('message');
            $table->enum('seen',['0','1']);
            $table->timestamp('time');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification');
    }
};
