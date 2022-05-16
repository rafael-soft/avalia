<?php

namespace Database\Seeders;

use App\Models\TipoTelefone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoTelefoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoTelefone::firstOrCreate([
            'id' => 1,
            'nome' => 'Residêncial',
            'descricao' => 'Número de telefone da residência oficial do contato.'
        ]);

        TipoTelefone::firstOrCreate([
            'id' => 2,
            'nome' => 'Celular',
            'descricao' => 'Número de telefone do celular particular do contato.'
        ]);

        TipoTelefone::firstOrCreate([
            'id' => 3,
            'nome' => 'Comercial',
            'descricao' => 'Número de telefone profissional do contato.'
        ]);

        TipoTelefone::firstOrCreate([
            'id' => 4,
            'nome' => 'Outro',
            'descricao' => 'Número de telefone adicional do contato.'
        ]);
    }
}
