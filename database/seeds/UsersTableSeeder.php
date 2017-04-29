<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'User 001',
            'email' => 'user001@test.com',
            'password' => bcrypt('user001')
        ]);
    }
}
