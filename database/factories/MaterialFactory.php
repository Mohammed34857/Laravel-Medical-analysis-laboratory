<?php

namespace Database\Factories;

use App\Models\lab_ana_partial_analysis;
use App\Models\material;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           "name"=>$this->faker->name(),
           "production_date"=>$this->faker->date(),
           "expiry_date"=>$this->faker->date(),
           "quantity"=>$this->faker->randomNumber(),
           "price"=>$this->faker->randomNumber()
        ];
    }
}
