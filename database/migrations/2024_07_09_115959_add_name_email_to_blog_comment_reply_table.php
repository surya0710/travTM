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
        Schema::table('blog_comment_reply', function (Blueprint $table) {
            $table->string('name')->after('blog_comment_id');
            $table->string('email')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_comment_reply', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('email');
        });
    }
};
