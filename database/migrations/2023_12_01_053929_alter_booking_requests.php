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
        Schema::table('booking_requests', function (Blueprint $table) {
            $table->text('cng_kit_id')->nullable()->after('user_id');
            $table->text('cng_kit_amount')->nullable()->after('cng_kit_id');
            $table->softDeletes()->after('status');
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
