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
        Schema::create('pages_categories', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            
            // $table->integer('category_parent_id');
            $table->string('category_name');
            $table->text('category_description');
            $table->integer('category_order');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages_categories');
    }
};
