<?php

use App\Models\employee;
use App\Models\lab_ana_partial_analysis;
use App\Models\medical_referral;
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
        Schema::create('analysis_demands', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(lab_ana_partial_analysis::class)->constrained();
            $table->foreignIdFor(medical_referral::class)->constrained();
            $table->foreignIdFor(employee::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analysis_demands');
    }
};
