<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\School;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class schoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = School::create([
            'code'=> Str::random(5),
            'name'=> "Smk Jambi",
            'address'=> " Jl. Pertiwi No.116, Bantan, Kec. Medan Tembung, Kota Medan, Sumatera Utara 20224",
        ]);

        $user = User::create([
            'id_school' => $school->id,
            'name' => $school->name,
            'username' => 'jambi',
            'email' => 'jambi@email.com',
            'password' => bcrypt('admin123'),
            'role'  => 'operator'
        ]);

    }
}
