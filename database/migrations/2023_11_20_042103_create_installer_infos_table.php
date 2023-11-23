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
        Schema::create('installer_infos', function (Blueprint $table) {
            $table->id();
            $table->text('installer_id');
            $table->text('national_identification_no');
            $table->text('residental_address');
            $table->text('ocupation');
            $table->text('passport_photo');
            $table->text('national_id_card');
            $table->text('drivers_license');
            $table->text('company_name');
            $table->text('cac_registration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installer_infos');
    }
};
