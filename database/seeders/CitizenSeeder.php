<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Citizen;
use Faker\Factory as Faker;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Ajoutez 10 citoyens factices
        foreach (range(1, 10) as $index) {
            Citizen::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->date,
                'address' => $faker->address,
                'phone_number' => $faker->unique()->phoneNumber,
                'has_driver_license' => $faker->boolean(80), // 80% de chances d'avoir un permis
                'has_weapon_license' => $faker->boolean(20), // 20% de chances d'avoir un permis d'arme
            ]);
        }
    }
}
