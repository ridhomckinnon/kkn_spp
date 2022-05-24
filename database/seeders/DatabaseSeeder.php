<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::create([
            'name' => "Admin",
            'username' => "admin",
            'email' => 'admin@email.com',
            'password' => bcrypt('admin123'),
            'role' => "admin",
        ]);

        $this->call([
            schoolSeeder::class
        ]);

    }
}
