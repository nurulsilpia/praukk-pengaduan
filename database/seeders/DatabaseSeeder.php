<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'Jennie Ruby Jubran',
            'email' => 'jenniejubran@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'username' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('password'),
            'is_petugas' => 1
        ]);

        User::create([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1,
        ]);
    }
}
