<?php

use App\Models\material;
use App\Models\offer;
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
        Schema::create('offer_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(material::class)->constrained();
            $table->foreignIdFor(offer::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_materials');
    }
};
