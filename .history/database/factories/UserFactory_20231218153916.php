<?php

namespace Database\Factories;
namespace

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return (\Illuminate\Support\Carbon|\Ramsey\Uuid\UuidInterface|string)[]
     *
     * @psalm-return array{id: \Ramsey\Uuid\UuidInterface, name: string, surname: string, email: string, email_verified_at: \Illuminate\Support\Carbon, password: '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', role: 'user', remember_token: string}
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'name' => fake()->name(),
            'surname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'user',
            'remember_token' => Str::random(10),
           
        ];
    }
}
