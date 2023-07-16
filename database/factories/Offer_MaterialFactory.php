<?php

namespace Database\Factories;

use App\Models\material;
use App\Models\offer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\offer_material>
 */
class Offer_MaterialFactory extends Factory
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
            "offer_id"=>offer::inRandomOrder()->first()->id

        ];
    }
}
