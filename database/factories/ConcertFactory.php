<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concert>
 */
class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => \strtoupper($this->faker->word()),
            'tanggal' => $this->faker->dateTimeBetween('2022-04-13', '2023-02-31')->format('Y-m-d'),
        ];
    }
}
