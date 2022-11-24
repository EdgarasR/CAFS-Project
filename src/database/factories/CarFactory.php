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
    public function definition()
    {
        return [
            'model' => fake()->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', 'X1', 'X2', 'X3', 'X4', 'X5', 'X6', 'X7']),
            'engine' => fake()->randomElement(['1.6', '1.8', '2.0', '2.5', '2.8', '3.0', '3.5']),
            'fuel' => fake()->randomElement(['Dyzelinas', 'Benzinas']),
            'gearbox' => fake()->randomElement(['Automatinė', 'Mechaninė']),
            'power' => fake()->numberBetween(80, 280),
            'color' => fake()->randomElement(['Juoda', 'Balta', 'Raudona', 'Mėlyna', 'Pilka', 'Žalia']),
            'price' => fake()->randomFloat(2, 25000, 95000),
            'img' => 'https://images.assetsdelivery.com/compings_v2/rashadashurov/rashadashurov2002/rashadashurov200202000.jpg',
        ];
    }
}
