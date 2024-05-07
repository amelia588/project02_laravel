<?php

namespace Database\Factories;

use App\Models\Carrito;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarritoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carrito::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'cantidad' => $this->faker->numberBetween(1, 10),
            'precio' => $this->faker->randomFloat(2, 10, 500),
            'imagen' => $this->faker->imageUrl(640, 480, 'technics', true)
        ];
    }
}
