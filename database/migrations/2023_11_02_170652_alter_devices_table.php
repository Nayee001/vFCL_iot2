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
        Schema::table('devices', function (Blueprint $table) {
            $table->string('imei', 20)->nullable();
            $table->ipAddress('ip_address')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('device_assignments', function (Blueprint $table) {
            $table->dropColumn('imei', 20)->nullable();
            $table->dropColumn('ip_address')->nullable();
        });
    }
};