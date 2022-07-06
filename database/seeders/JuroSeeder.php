<?php

namespace Database\Seeders;
use App\Models\Juro;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Juro::create(['porcentagem' => '0']);
        Juro::create(['porcentagem' => '5']);
        Juro::create(['porcentagem' => '10']);
        Juro::create(['porcentagem' => '15']);
        Juro::create(['porcentagem' => '20']);
        Juro::create(['porcentagem' => '25']);
        Juro::create(['porcentagem' => '30']);
        Juro::create(['porcentagem' => '35']);
        Juro::create(['porcentagem' => '40']);
        Juro::create(['porcentagem' => '45']);
        Juro::create(['porcentagem' => '50']);
        Juro::create(['porcentagem' => '55']);
        Juro::create(['porcentagem' => '60']);
        Juro::create(['porcentagem' => '65']);
        Juro::create(['porcentagem' => '70']);
        Juro::create(['porcentagem' => '75']);
        Juro::create(['porcentagem' => '80']);
        Juro::create(['porcentagem' => '85']);
        Juro::create(['porcentagem' => '90']);
        Juro::create(['porcentagem' => '95']);
        Juro::create(['porcentagem' => '100']);
    }
}
