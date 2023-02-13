<?php

namespace Database\Seeders;

use App\Models\Consultations;
use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateConsultationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $consultations = Consultations::create([
            'users_id' => '1',
            'day' => 'monday',
            'time' => '10:00-11:30',
            'doctors_id' => '1',
            'durata' => '90 min',

        ]);
    }
}
