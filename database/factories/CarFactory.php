<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $bool = rand(0, 1);

        return [

            'name' => fake()->name(),

            'model' => fake()->randomAscii(),

            'published' => ($bool == 1) ? true : false,

        ];
    }
}
