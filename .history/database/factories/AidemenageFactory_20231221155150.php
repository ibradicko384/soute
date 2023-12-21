// database/factories/AidemenageFactory.php

use App\Models\Aidemenage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Aidemenage::class, function (Faker $faker) {
    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'date_naissance' => $faker->date,
        'quartier' => $faker->city,
        // Ajoutez d'autres attributs ici selon vos besoins
    ];
});
