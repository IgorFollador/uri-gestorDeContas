<?php

namespace Database\Seeders;
use App\Models\FormaDePagamento;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormaDePagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormaDePagamento::create(['descricao' => 'Dinheiro']);
        FormaDePagamento::create(['descricao' => 'Cartão De Crédito']);
        FormaDePagamento::create(['descricao' => 'Cartão de Débito']);
        FormaDePagamento::create(['descricao' => 'Cheque']);
        FormaDePagamento::create(['descricao' => 'Boleto']);
        FormaDePagamento::create(['descricao' => 'Criptomoeda']);
    }
}
