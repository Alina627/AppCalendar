<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'doctor-list',
            'doctor-create',
            'doctor-edit',
            'doctor-delete',
            'consultations-list',
            'consultations-create',
            'consultations-edit',
            'consultations-delete',





        ];
        // $permUser = [
        //     'recipies-edit',
        // ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // foreach ($permUser as $permUser) {
        //     Permission::create(['name' => $permUser]);
        // }
    }
}
