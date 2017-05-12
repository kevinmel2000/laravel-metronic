<?php

use App\User;
use App\Models\Entrust\Role;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_admin = User::where('email', 'admin@admin.com')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user_admin->attachRole($role_admin);

        $user_001   = User::where('email', 'user001@test.com')->first();
        $role_user  = Role::where('name', 'user')->first();

        $user_001->attachRole($role_user);
    }
}
