<?php

namespace Database\Factories;

use App\Models\doctor;
use App\Models\patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\medical_referral>
 */
class Medical_ReferralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          "doctor_id"=>doctor::inRandomOrder()->first()->id,
          "patient_id"=>patient::inRandomOrder()->first()->id

        ];
    }
}
