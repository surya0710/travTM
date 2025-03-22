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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('title');
            $table->string('slug');
            $table->tinyInteger('category_id');
            $table->string('image_file')->nullable();
            $table->text('description');
            $table->string('meta_keywords',500)->nullable();
            $table->string('meta_description',500)->nullable();
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    
    }
};
