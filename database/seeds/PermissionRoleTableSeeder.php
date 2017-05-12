<?php

use App\Models\Entrust\Role;
use Illuminate\Database\Seeder;
use App\Models\Entrust\Permission;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $permission_admin = Permission::where('name', 'access-acp')->first();

        $role_admin->attachPermission($permission_admin);

        $role_user = Role::where('name', 'user')->first();
        $permission_user  = Permission::where('name', 'access-ucp')->first();

        $role_user->attachPermission($permission_user);
    }
}
