<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneroPessoa;

class GeneroPessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneroPessoa::firstOrCreate([
            'id' => 1,
            'genero' => 'Masculino'
        ]);

        GeneroPessoa::firstOrCreate([
            'id' => 2,
            'genero' => 'Feminino'
        ]);

        GeneroPessoa::firstOrCreate([
            'id' => 3,
            'genero' => 'Outro'
        ]);

        GeneroPessoa::firstOrCreate([
            'id' => 4,
            'genero' => 'Prefiro não dizer'
        ]);

    }
}
