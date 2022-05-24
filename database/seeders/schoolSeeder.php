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
        $user = User::create([
            'name' => 'Smk Jambi',
            'username' => 'jambi',
            'email' => 'jambi@email.com',
            'password' => bcrypt('admin123'),
            'role'  => 'operator'
        ]);

        $school = School::create([
            'id_user'=> $user->id,
            'code'=> Str::random(5),
            'name'=> $user->name,
            'address'=> " Jl. Pertiwi No.116, Bantan, Kec. Medan Tembung, Kota Medan, Sumatera Utara 20224",
        ]);
    }
}
