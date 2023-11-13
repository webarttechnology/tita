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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('year_of_launch');
            $table->string('range');
            $table->string('power');
            $table->string('charging_time');
            $table->string('seating_capacity');
            $table->string('distance');
            $table->string('battery_capacity');
            $table->text('features')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_vehicles');
    }
};
