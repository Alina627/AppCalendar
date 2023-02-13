<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Permissions
        $permissions = Permission::pluck('id', 'id')->all();
        //$permUser = Permission::pluck('id', 'id')->all();

        // Create Roles
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleUser = Role::create(['name' => 'Client']);

        $roleAdmin->syncPermissions($permissions);
        //$roleUser->syncPermissions($permissions);

        // Create fixed users
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => '0000'
        ]);
        $client = User::create([
            'name' => 'alina',
            'email' => 'alina@email.com',
            'password' => '0000'
        ]);

        $admin->assignRole([$roleAdmin->id]);
        $client->assignRole([$roleUser->id]);

        $roleAdmin->givePermissionTo([
            'user-create',
            'user-delete',
            'user-edit',
            'doctor-create',
            'doctor-edit',
            'doctor-delete',
            'consultations-list',
            'consultations-create',
            'consultations-edit',
            'consultations-delete',



        ]);

        // $roleUser->givePermissionTo([
        //     'consultations-list',
        //     'consultations-create',
        //     'consultations-edit',
        //     'consultations-delete',

        // ]);

        //Factory generate multiple Admins and users
        $validRoles = [$roleUser];
        \App\Models\User::factory(10)->create()->each(function ($user) use ($validRoles) {
            $user->assignRole($validRoles[array_rand($validRoles)]);
        });
    }
}
