<?php

namespace Database\Seeders;

Use App\Models\User;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Endy',
            'email' => 'endy@example.com',
            'password' => Hash::make('qwer2323'),
        ]);
    }
}
