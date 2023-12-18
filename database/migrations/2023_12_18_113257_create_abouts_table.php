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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable();
            $table->longText('description')->nullable();
            $table->text('image')->nullable();
            $table->text('we_are_heading')->nullable();
            $table->text('we_are_description')->nullable();
            $table->text('we_are_not_heading')->nullable();
            $table->text('we_are_not_description')->nullable();
            $table->text('what_we_do_heading')->nullable();
            $table->text('what_we_do_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
