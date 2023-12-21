<?php

namespace Database\Factories;

use App\Models\Foyer;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoyerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Foyer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'quartier' => $this->faker->city,
            // Ajoutez d'autres attributs et générateurs de données si nécessaire
        ];
    }
}
