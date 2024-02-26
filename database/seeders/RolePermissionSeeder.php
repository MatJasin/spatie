<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'add-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'view-user']);

        Permission::create(['name' => 'add-text']);
        Permission::create(['name' => 'edit-text']);
        Permission::create(['name' => 'delete-text']);
        Permission::create(['name' => 'view-text']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writer']);

        $roleadmin = Role::findByName('admin');
        $roleadmin->givePermissionTo('add-user');
        $roleadmin->givePermissionTo('edit-user');
        $roleadmin->givePermissionTo('delete-user');
        $roleadmin->givePermissionTo('view-user');

        $rolewriter = Role::findByName('writer');
        $rolewriter->givePermissionTo('add-text');
        $rolewriter->givePermissionTo('edit-text');
        $rolewriter->givePermissionTo('delete-text');
        $rolewriter->givePermissionTo('view-text');
    }
}
