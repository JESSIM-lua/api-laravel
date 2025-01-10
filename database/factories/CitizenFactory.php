<?php

namespace Database\Factories;

use App\Models\Citizen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    protected $model = Citizen::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date('Y-m-d', '2005-01-01'),
            'address' => $this->faker->address,
            'phone_number' => $this->faker->numerify('+1-###-###-####'), // Format fixe pour éviter le dépassement
            'has_driver_license' => $this->faker->boolean(80),
            'has_weapon_license' => $this->faker->boolean(20),
        ];
    }
}
