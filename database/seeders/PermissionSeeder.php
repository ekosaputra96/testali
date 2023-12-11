<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // user-management
            'user-management'
        ];

        foreach ($permissions as $permission) {
            # code...
            Permission::create([
                'name' => $permission
            ]);
        }

        $superAdminRole = Role::create([
            'name' => 'superadmin'
        ]);

        $superAdminRole->givePermissionTo($permissions);
    }
}
