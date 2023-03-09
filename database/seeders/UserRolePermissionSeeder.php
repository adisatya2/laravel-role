<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user_value = [
            'password' => '$2y$10$5Agby6TYTko4s7S4dWYpyOiLyyV/A5ePpSGXBlTClz6U69rpf3AVO', // 12345678
            'remember_token' => Str::random(10),
        ];

        $staff = User::create(
            array_merge([
                'nrp' => 'staff',
                'name' => 'staff'
            ], $default_user_value)
        );

        $kaur = User::create(
            array_merge([
                'nrp' => 'kaur',
                'name' => 'kaur'
            ], $default_user_value)
        );

        $manajer = User::create(
            array_merge([
                'nrp' => 'manajer',
                'name' => 'manajer'
            ], $default_user_value)
        );

        $it = User::create(
            array_merge([
                'nrp' => '015190501',
                'name' => 'Adisatya'
            ], $default_user_value)
        );

        $role_staff = Role::create(['name' => 'staff']);
        $role_kaur = Role::create(['name' => 'kaur']);
        $role_manajer = Role::create(['name' => 'manajer']);
        $role_it = Role::create(['name' => 'it']);

        $permission = Permission::create(['name' => 'read role']);
        $permission = Permission::create(['name' => 'create role']);
        $permission = Permission::create(['name' => 'update role']);
        $permission = Permission::create(['name' => 'delete role']);
        $permission = Permission::create(['name' => 'read konfigurasi']);

        $role_it->givePermissionTo(['read role', 'create role', 'update role', 'delete role', 'read konfigurasi']);

        $staff->assignRole('staff');
        $kaur->assignRole('kaur');
        $manajer->assignRole('manajer');
        $manajer->assignRole('kaur');
        $manajer->assignRole('staff');
        $it->assignRole('it');
    }
}
