<?php

namespace Database\Factories;

use App\Models\ana_partial_analysis;
use App\Models\laboratory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\lab_ana_partial_analysis>
 */
class Lab_Ana_Partial_AnalysisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        "laboratory_id"=>laboratory::inRandomOrder()->first()->id,
        "ana_partial_analysis_id"=> ana_partial_analysis::inRandomOrder()->first()->id
        ];
    }
}
