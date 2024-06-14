<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    public function run(): void
    {
        Profil::factory()->create([
            'nomor_hp'  => '0896 5769 5975',
            'alamat'    => 'Jl. Veteran NO 43/51 RT 19/05',
            'kota'      => 'Sukabumi',
            'pos'       => '43152'
        ]);

        Profil::factory(10)->create();
    }
}
