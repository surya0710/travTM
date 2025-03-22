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
        Schema::create('work_process_attr', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_process_id')->constrained('work_process')->onDelete('cascade');
            $table->string('work_process_title');
            $table->string('work_process_desc');
            $table->string('work_process_image');
            $table->integer('order_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_process_attr');
    }
};
