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
        Schema::create('installer_locations', function (Blueprint $table) {
            $table->id();
            $table->text('installer_id');
            $table->text('address_line_1');
            $table->text('address_line_2')->nullable();
            $table->text('country');
            $table->text('state');
            $table->text('city');
            $table->text('zip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installer_locations');
    }
};
