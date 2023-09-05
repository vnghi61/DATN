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
        {
            Schema::table('posts', function (Blueprint $table) {
                $table->integer('reaction_like_count')->default('0')->change();
                $table->integer('reaction_love_count')->default('0')->change();
                $table->integer('reaction_haha_count')->default('0')->change();
                $table->integer('reaction_yay_count')->default('0')->change();
                $table->integer('reaction_wow_count')->default('0')->change();
                $table->integer('reaction_sad_count')->default('0')->change();
                $table->integer('reaction_angry_count')->default('0')->change();
                $table->integer('comments')->default('0')->change();
                $table->integer('views')->default('0')->change();
                $table->integer('shares')->default('0')->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
