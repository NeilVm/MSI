<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin user
        User::create([
            'name' => 'admin',
            'email' => 'Nevm@Nevm.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'admin' => true,
        ]);

            // user Test
        User::create ([
            'name' => 'JGuerra',
            'email' => 'JGuerra@msi.com',
            'email_verified_at' =>now(),
            'password' => bcrypt('password'),
            'admin' => false,
        ]);
    }
}
