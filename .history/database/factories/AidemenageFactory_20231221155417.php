<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     *
     * @psalm-return array<never, never>
     */
    public function definition(): array
    {
        return [
            $factory->define(Aidemenage::class, function (Faker $faker) {
                return [
                    'nom' => $faker->lastName,
                    'prenom' => $faker->firstName,
                    'date_naissance' => $faker->date,
                    'quartier' => $faker->city,
                    // Ajoutez d'autres attributs ici selon vos besoins
                ];
            
        ];
    }
}