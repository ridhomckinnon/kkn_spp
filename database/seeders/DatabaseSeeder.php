<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\School;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $school = School::create([
            'code'=> Str::random(5),
            'name'=> "Admin Smk Jambi",
            'address'=> " Jl. Pertiwi No.116, Bantan, Kec. Medan Tembung, Kota Medan, Sumatera Utara 20224",
        ]);

        $user = User::create([
            'id_school' => $school->id,
            'name' => $school->name,
            'username' => 'admin-jambi',
            'email' => 'adminjambi@email.com',
            'password' => bcrypt('admin123'),
            'role'  => 'admin'
        ]);

        $this->call([
            schoolSeeder::class
        ]);

    }
}
