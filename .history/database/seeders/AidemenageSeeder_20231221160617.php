<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aidemenage;

class AidemenageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Utilisation du factory pour créer 50 aidemenages
        Aidemenage::factory()->count(70)->create();
    }
}
