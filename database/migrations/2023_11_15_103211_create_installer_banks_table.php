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
        Schema::create('installer_banks', function (Blueprint $table) {
            $table->id();
            $table->text('installer_id');
            $table->text('card_holder_name');
            $table->text('card_number');
            $table->text('cvv');
            $table->text('expiry_month');
            $table->text('expiry_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installer_banks');
    }
};
