<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

            [
                'permissions' => [
                    'Dashboard Show',
                    'Role Management',
                ]
            ],
            [
                'permissions' => [
                    'Role Create',
                    'Role List',
                    'Role Edit',
                    'Role Delete',
                ]
            ],
            [
                'permissions' => [
                    'Permission List',
                    'Permission Create',
                    'Permission Edit',
                    'Permission Delete',
                ]
            ],
            [
                'permissions' => [
                    'User List',
                    'User Create',
                    'User Edit',
                    'User Delete',
                ]
            ],
        ];


        $roleSuperAdmin = Role::create(['name' => 'Admin']);

        // Create and Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'guard_name' => 'web']);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }

        // Assign super admin role permission to superadmin user
        $admin = User::where('email', 'superadmin@gmail.com')->first();
        if ($admin) {
            $admin->assignRole($roleSuperAdmin);
        }
    }
}
