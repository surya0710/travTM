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
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_pic')->nullable()->after('remember_token');
            $table->tinyInteger('status')->default('0')->after('is_admin');
            $table->tinyInteger('is_delete')->default('0')->after('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile_pic');
            $table->dropColumn('status');
            $table->dropColumn('is_delete');
        });
    }
};
