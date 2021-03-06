<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => "admin",
                'email' => 'admin@mail.com',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'address' => 'Admin Address',
                'phone' => '081231231231',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => "member",
                'email' => 'member@mail.com',
                'role' => 'member',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'address' => 'Member Address',
                'phone' => '081231231231',
                'remember_token' => Str::random(10),
            ]
        ];
        User::insert($users);
    }
}
