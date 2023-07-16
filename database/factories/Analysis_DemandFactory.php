<?php

namespace Database\Factories;

use App\Models\employee;
use App\Models\lab_ana_partial_analysis;
use App\Models\medical_referral;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\analysis_demand>
 */
class Analysis_DemandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'lab_ana_partial_analysis_id'=>lab_ana_partial_analysis::inRandomOrder()->first()->id,
        'medical_referral_id'=>medical_referral::inRandomOrder()->first()->id,
        'employee_id'=>employee::inRandomOrder()->first()->id

        ];
    }
}
