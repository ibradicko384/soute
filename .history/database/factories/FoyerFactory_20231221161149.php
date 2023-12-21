<?php

namespace Database\Factories;

use App\Models\Aidemenage;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoyerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aidemenage::class;

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
            'date_de_naissance' => $this->faker->date,
            'quartier' => $this->faker->city,
            // Ajoutez d'autres attributs et générateurs de données si nécessaire
        ];
    }
}
