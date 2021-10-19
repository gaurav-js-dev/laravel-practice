<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
                'name' => 'Admin John',
                'email' => 'adminjohn@gmail.com',
                'password' => 'Laravelproject@1234',
            ],
            [
                'name' => 'User Joe',
                'email' => 'userjoe@gmail.com',
                'password' => 'Laravelproject@1234',
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password'])
            ]);
        }
    }
}
