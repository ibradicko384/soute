<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Foyer;

class FoyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Utilisation du factory pour créer 50 foyers
        Foyer::factory()->count(70)->create();
    }
}
