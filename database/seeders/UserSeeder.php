<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $user = User::create(
            [
                'fname' => 'admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'), // password
                'role_as' => 1,
                'remember_token' => Str::random(10),
            ]
        );
    }
}
