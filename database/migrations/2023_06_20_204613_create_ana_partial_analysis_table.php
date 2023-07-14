<?php

use App\Models\analysis;
use App\Models\partial_analysis;
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
        Schema::create('ana_partial_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(analysis::class)->constrained();
            $table->foreignIdFor(partial_analysis::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ana_partial_analyses');
    }
};
