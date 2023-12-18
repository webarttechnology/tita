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
        Schema::create('installer_test_results', function (Blueprint $table) {
            $table->id();
            $table->text('installer_id')->nullable();
            $table->text('exam_link_id')->nullable();
            $table->text('total_question')->nullable();
            $table->text('correct_question')->nullable();
            $table->text('percent_obtain')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installer_test_results');
    }
};
