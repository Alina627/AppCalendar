<?php

namespace Database\Factories;

use App\Models\Consultations;
use App\Models\Doctor;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipies>
 */
class ConsultationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'users_id' => User::all()->random()->id,
            'day'  => $faker->dayOfWeek(),
            'time' => Doctor::all()->random()->program,
            'durata' => Consultations::all()->random()->durata,
            'doctors_id' => Doctor::all()->random()->id,





        ];
    }
}
