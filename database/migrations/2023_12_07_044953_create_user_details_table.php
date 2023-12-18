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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->text('address')->nullable();
            $table->text('driver_id')->nullable();
            $table->text('proof_of_vehicle')->nullable();
            $table->text('vehicle_type')->nullable();
            $table->text('vehicle_year')->nullable();
            $table->text('vehicle_make')->nullable();
            $table->text('vehicle_model')->nullable();
            $table->text('engine_power')->nullable();
            $table->text('engine_capacity')->nullable();
            $table->text('injection_type')->nullable();
            $table->text('vin_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
