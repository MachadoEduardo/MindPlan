<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'des_regis' => fake()->unique()->numerify('PAT#####'), // Ex: PAT12345
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement(['Masculino', 'Feminino', 'Outro']),
            'nacionality' => fake()->country(),
            'blood_type' => fake()->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']),
            'birthdate' => fake()->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
            'photo' => null, // Ou fake()->imageUrl()
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('password'), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
