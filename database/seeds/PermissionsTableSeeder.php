<?php

use Illuminate\Database\Seeder;
use App\Models\Entrust\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'admin-permission'
        ]);

        Permission::create([
            'name' => 'user-permission'
        ]);
    }
}
