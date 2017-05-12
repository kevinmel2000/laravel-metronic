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
            'name' => 'access-acp',
            'display_name' => 'Access permission to ACP (Admin Control Panel)'
        ]);

        Permission::create([
            'name' => 'access-ucp',
            'display_name' => 'Access permission to UCP (User Control Panel)'
        ]);
    }
}
