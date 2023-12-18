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
        //
        Schema::create('installer_available_locations', function (Blueprint $table) {
            $table->id();
            $table->text('installer_id')->nullable();
            $table->text('installer_location_id')->nullable();
            $table->text('zip')->nullable();
            $table->text('location_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
