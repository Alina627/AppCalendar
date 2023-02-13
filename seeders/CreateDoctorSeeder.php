<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Program;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateDoctorSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {
  $doctor = Doctor::create([
   'name' => 'Popovici Mihai',
   'program' => '09:00-13:30',
   'email' => 'popovici@yahoo.com',

  ]);
 }
}
