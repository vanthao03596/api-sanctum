<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $writer = factory(\App\User::class)->create(['name' => 'writer']);
        $role = Role::create(['name' => 'writer']);
        $role->givePermissionTo('edit articles');
        $writer->assignRole($role);

        // or may be done by chaining
        $moderator= factory(\App\User::class)->create(['name' => 'moderator']);
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['publish articles', 'unpublish articles']);
        $moderator->assignRole($role);

        $superAdmin= factory(\App\User::class)->create(['name' => 'super-admin', 'email' => 'admin@gmail.com']);
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
        $superAdmin->assignRole($role);
    }
}
