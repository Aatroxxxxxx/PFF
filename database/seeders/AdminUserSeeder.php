<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
                [
                    'username' => 'admin',
                    'email' => 'admin@email.com',
                    'password' => bcrypt('123'),
                    'is_admin' => true,
                ]
            ];
        $user = [
                [
                    'username' => 'user',
                    'email' => 'user@email.com',
                    'password' => bcrypt('abc'),
                    'is_admin' => false,
                ]
            ];
            
        User::insert($admin, $user);

    }
}
