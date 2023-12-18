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
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn('company_name');
            $table->dropColumn('contact_name');
            $table->dropColumn('phone_number');
            $table->dropColumn('email');
            $table->dropColumn('address');
            $table->dropColumn('vehical_type');
            $table->dropColumn('make');
            $table->dropColumn('model');
            $table->dropColumn('year');
            $table->dropColumn('company_street_no');
            $table->dropColumn('company_block');
            $table->dropColumn('company_street_name');
            $table->dropColumn('company_city');
            $table->dropColumn('company_state');
            $table->dropColumn('additional_details');
            // Add new fields
            $table->text('inspector_id')->nullable();
            $table->text('workshop_type')->nullable();
            $table->text('workshop_size')->nullable();
            $table->text('risk_management')->nullable();
            $table->text('front_image')->nullable();
            $table->text('application_conformation')->nullable();
            $table->text('work_area')->nullable();
            $table->text('wideshot_street')->nullable();
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
