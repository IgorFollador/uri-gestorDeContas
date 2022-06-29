<?php

namespace Database\Seeders;
use App\Models\Moeda;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Moeda::create(['descricao' => 'Real']);
        Moeda::create(['descricao' => 'Dólar']);
        Moeda::create(['descricao' => 'Euro']);
        Moeda::create(['descricao' => 'Bitcoin']);
    }
}
