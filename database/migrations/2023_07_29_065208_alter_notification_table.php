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
        Schema::table('groups_numbers', function (Blueprint $table) {
            $table->unsignedBigInteger('to_user_id');
            $table->foreign('to_user_id')->references('user_id')->on('users');
            
            $table->unsignedBigInteger('from_user_id');
            $table->foreign('from_user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};