<?php

use App\Models\department;
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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(department::class)->constrained();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("academic_achievement");
            $table->date("date_brith");
            $table->string("address");
            $table->string("phone");
            $table->enum('marital_status', ['single', 'married']);
            $table->date("date_employment");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
