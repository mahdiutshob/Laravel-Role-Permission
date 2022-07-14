<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Roles
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleUser = Role::create(['name' => 'User']);

        //Permission List Array
        $permissions = [
            //Dashboard Permission
            'dashboard.view',

            //Blog Permisssion
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approve',

            //Admin Permission
            'admin.create',
            'admin.view',
            'admin.edit',
            'admin.delete',
            'admin.approve',

            //Roles Permission
            'role.create',
            'role.view',
            'role.edit',
            'role.delete',
            'role.approve',

            //Profile Permission
            'profile.create',
            'profile.view',
            'profile.edit',
            'profile.delete',
            'profile.approve',

        ];

        //Create & Assing Permission
        for ($i = 0; $i < count($permissions); $i++) {

            // Create Permission
            $permission = Permission::create(['name' => $permissions[$i]]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperAdmin);
        }
    }
}
