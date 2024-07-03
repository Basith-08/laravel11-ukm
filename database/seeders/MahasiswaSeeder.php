<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10 ; $i++) { 
            Mahasiswa::create([
                'nama'=> $faker -> name,
                'nim'=> $faker -> nik(),
                'kelamin'=> 'laki-laki',
            ]);
        };
    }
}
