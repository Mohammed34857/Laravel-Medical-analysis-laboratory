<?php

namespace Database\Factories;

use App\Models\analysis;
use App\Models\partial_analysis;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ana_partial_analysis>
 */
class Ana_Partial_AnalysisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $analysis = analysis::inRandomOrder()->first();
        $partial_analysis = partial_analysis::inRandomOrder()->first();

        return [
            'analysis_id' => optional($analysis)->id,
            'partial_analysis_id' => optional($partial_analysis)->id
        ];
    }
}
