<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredients>
 */
class DoctorFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()

    {


        return [
            'name' => fake()->name(),
            'program' => Doctor::all()->random()->program,
            'email' => fake()->unique()->safeEmail(),

        ];
    }
}
