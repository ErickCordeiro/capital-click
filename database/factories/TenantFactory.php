<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'document' => '37974251000187',
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'responsible' => fake()->name()
        ];
    }
}
