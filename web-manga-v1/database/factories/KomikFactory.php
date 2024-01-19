<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KomikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(),
            'pengarang' => $this->faker->name(),
            'penerbit' => $this->faker->name(),
            'tahun' => $this->faker->date(),
        ];
    }
}
