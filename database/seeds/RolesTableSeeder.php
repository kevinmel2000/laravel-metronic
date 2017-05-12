<?php

use App\Models\Entrust\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'display_name' => 'Admin'
        ]);

        Role::create([
            'name' => 'user',
            'display_name' => 'User'
        ]);
    }
}
