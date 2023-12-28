<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();

        User::create([
            'nama' => 'Admin',
            'username' => 'admin1',
            'role' => 'Admin',
            'password' => Hash::make('1234')
        ]);

        User::create([
            'nama' => 'Manager',
            'username' => 'manager',
            'role' => 'Manager',
            'password' => Hash::make('1234')
        ]);

        User::create([
            'nama' => 'Kasir',
            'username' => 'kasir',
            'role' => 'Cashier',
            'password' => Hash::make('1234')
        ]);

        User::create([
            'nama' => 'Kasir',
            'username' => 'kasir',
            'role' => 'Cashier',
            'password' => Hash::make('1234')
        ]);

        User::create([
            'nama' => 'Noval Rizky Nugraha',
            'username' => 'noval',
            'role' => 'Cashier',
            'password' => Hash::make('1234')
        ]);

        User::create([
            'nama' => 'Muhamad Zaki Mahran Mufid',
            'username' => 'kasir',
            'role' => 'Cashier',
            'password' => Hash::make('1234')
        ]);

        User::create([
            'nama' => 'Muhammad Hafizi',
            'username' => 'kasir',
            'role' => 'Cashier',
            'password' => Hash::make('1234')
        ]);
    }
}
