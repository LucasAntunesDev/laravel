<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'username' => 'user1',
                'password' => Hash::make('user1'),
                'admin' => 1,
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'username' => 'admin',
                'password' => Hash::make('123'),
                'admin' => 1,
            ],
        ]);
    }
}
