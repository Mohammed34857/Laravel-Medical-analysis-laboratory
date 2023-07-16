<?php

namespace Database\Factories;


use App\Models\laboratory;
use App\Models\material;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\material_laboratory>
 */
class Material_LaboratoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        "material_id"=>material::inRandomOrder()->first()->id,
        "laboratory_id"=>laboratory::inRandomOrder()->first()->id

        ];
    }
}
