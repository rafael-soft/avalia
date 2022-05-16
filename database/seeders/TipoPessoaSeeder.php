<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoPessoa;

class TipoPessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPessoa::firstOrCreate([
            'id' => 1,
            'nome' => 'Física',
            'descricao' => 'Sujeito concreto que possui direitos e deveres simplesmente pela sua existência. '
        ]);

        TipoPessoa::firstOrCreate([
            'id' => 2,
            'nome' => 'Jurídica',
            'descricao' => 'Entidades abstratas que depende da sua criação para que possam existir.'
        ]);
    }
}
