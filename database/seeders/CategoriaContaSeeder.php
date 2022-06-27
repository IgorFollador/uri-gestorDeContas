<?php

namespace Database\Seeders;
use App\Models\CategoriaConta;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaConta::create(['categoria' => 'Janeiro']);
        CategoriaConta::create(['categoria' => 'Fevereiro']);
        CategoriaConta::create(['categoria' => 'Março']);
        CategoriaConta::create(['categoria' => 'Abril']);
        CategoriaConta::create(['categoria' => 'Maio']);
        CategoriaConta::create(['categoria' => 'Junho']);
        CategoriaConta::create(['categoria' => 'Julho']);
        CategoriaConta::create(['categoria' => 'Agosto']);
        CategoriaConta::create(['categoria' => 'Setembro']);
        CategoriaConta::create(['categoria' => 'Outubro']);
        CategoriaConta::create(['categoria' => 'Novembro']);
        CategoriaConta::create(['categoria' => 'Dezembro']);
    }
}
