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
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name')->nullable();
            $table->string('website_logo')->nullable();
            $table->string('website_favicon')->nullable();
            $table->string('website_email')->nullable();
            $table->string('website_phone')->nullable();
            $table->string('website_address')->nullable();
            $table->string('website_facebook')->nullable();
            $table->string('website_twitter')->nullable();
            $table->string('website_instagram')->nullable();
            $table->string('website_linkedin')->nullable();
            $table->string('website_pinterest')->nullable();
            $table->string('website_youtube')->nullable();
            $table->string('website_whatsapp')->nullable();
            $table->text('website_map')->nullable();
            $table->text('website_copyright_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
