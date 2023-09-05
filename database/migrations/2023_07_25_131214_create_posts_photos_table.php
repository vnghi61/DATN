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
        Schema::create('posts_photos', function (Blueprint $table) {
            $table->bigIncrements('photo_id');
            $table->string('source');
            $table->integer('reaction_like_count')->default('0');
            $table->integer('reaction_love_count')->default('0');
            $table->integer('reaction_haha_count')->default('0');
            $table->integer('reaction_yay_count')->default('0');
            $table->integer('reaction_wow_count')->default('0');
            $table->integer('reaction_sad_count')->default('0');
            $table->integer('reaction_angry_count')->default('0');
            $table->integer('comments');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts_photos');
    }
};
