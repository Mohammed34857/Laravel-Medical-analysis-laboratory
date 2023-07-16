<?php

namespace Database\Factories;

use App\Models\department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          "department_id"=>department::inRandomOrder()->first()->id,
          "first_name"=>$this->faker->name(),
          "last_name"=>$this->faker->name(),
          "academic_achievement"=>$this->faker->text(),
          "date_brith"=>$this->faker->date(),
          "address"=>$this->faker->address(),
          "phone"=>$this->faker->phoneNumber(),
          "marital_status"=>$this->faker->randomElement(["single","married"]),
          "date_employment"=>$this->faker->date()
        ];
    }
}
