<?php

use App\Models\ana_partial_analysis;
use App\Models\laboratory;
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
        Schema::create('lab_ana_partial_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(laboratory::class)->constrained();
            $table->foreignIdFor(ana_partial_analysis::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_ana_partial_analyses');
    }
};
