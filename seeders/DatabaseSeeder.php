<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { // call others seeder class
        $this->call([
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            CreateDoctorSeeder::class,
            CreateConsultationsSeeder::class,

        ]);
        \App\Models\Doctor::factory()->create([
            'program' => '09:00-13:30'
        ]);
        \App\Models\Doctor::factory()->create([
            'program' => '13:30-21:00'
        ]);
        \App\Models\Consultations::factory()->create([
            'durata' => '90 min'
        ]);

        \App\Models\Doctor::factory(10)->create();
        \App\Models\Consultations::factory(10)->create();
    }
}
