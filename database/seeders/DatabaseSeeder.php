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
        $this->call(FormaDePagamentoSeeder::class);
        $this->call(CategoriaContaSeeder::class);
        $this->call(MoedaSeeder::class);
        $this->call(JuroSeeder::class);
    }
}
