<?php

use App\Models\doctor;
use App\Models\patient;
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
        Schema::create('medical_referrals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(doctor::class)->constrained();
            $table->foreignIdFor(patient::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_referrals');
    }
};
