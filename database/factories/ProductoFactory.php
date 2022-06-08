<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imagen' => "imagenes/producto/2.jpg",
            'titulo' => $this->faker->sentence(3),
            'precio1' => $this->faker->numberBetween(1000, 99000),
            'precio2' => $this->faker->numberBetween(1000, 99000),
        ];
    }
}
