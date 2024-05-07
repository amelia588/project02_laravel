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
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
            'precio' => $this->faker->randomFloat(2, 10, 500), // Ejemplo: genera un precio entre 10 y 500
            'imagen' => $this->faker->imageUrl(640, 480, 'electronics', true), // Ejemplo: una imagen aleatoria de electrónicos
            // Puedes seguir añadiendo más campos de tu modelo Producto aquí.
        ];
    }
}