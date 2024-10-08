<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Pemain::create([
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(0, 100),
                'posisi' => fake()->sentence(nbWords: 0.5),
            ]);
        }
    }
}
