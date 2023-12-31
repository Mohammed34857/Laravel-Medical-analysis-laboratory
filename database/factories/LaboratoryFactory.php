<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\laboratory>
 */
class LaboratoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
           "name_laboratory"=>$this->faker->name(),
           "name_manager"=>$this->faker->name(),
           "address"=>$this->faker->address(),
           'number_phone' => '09' . $this->faker->numberBetween(10000000, 99999999),
        ];
    }
}
