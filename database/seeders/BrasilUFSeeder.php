<?php

namespace Database\Seeders;

use App\Models\BrasilUF;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrasilUFSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrasilUF::firstOrCreate([
            'id' => 11,
            'nome' => 'Rondônia',
            'sigla' => 'RO'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 12,
            'nome' => 'Acre',
            'sigla' => 'AC'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 13,
            'nome' => 'Amazonas',
            'sigla' => 'AM'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 14,
            'nome' => 'Roraima',
            'sigla' => 'RR'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 15,
            'nome' => 'Pará',
            'sigla' => 'PA'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 16,
            'nome' => 'Amapá',
            'sigla' => 'AP'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 17,
            'nome' => 'Tocantins',
            'sigla' => 'TO'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 21,
            'nome' => 'Maranhão',
            'sigla' => 'MA'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 22,
            'nome' => 'Piauí',
            'sigla' => 'PI'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 23,
            'nome' => 'Ceará',
            'sigla' => 'CE'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 24,
            'nome' => 'Rio Grande do Norte	',
            'sigla' => 'RN'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 25,
            'nome' => 'Paraíba',
            'sigla' => 'PB'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 26,
            'nome' => 'Pernambuco',
            'sigla' => 'PE'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 27,
            'nome' => 'Alagoas',
            'sigla' => 'AL'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 28,
            'nome' => 'Sergipe',
            'sigla' => 'SE'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 29,
            'nome' => 'Bahia',
            'sigla' => 'BA'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 31,
            'nome' => 'Minas Gerais',
            'sigla' => 'MG'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 32,
            'nome' => 'Espírito Santo',
            'sigla' => 'ES'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 33,
            'nome' => 'Rio de Janeiro',
            'sigla' => 'RJ'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 35,
            'nome' => 'São Paulo',
            'sigla' => 'SP'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 41,
            'nome' => 'Paraná',
            'sigla' => 'PR'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 42,
            'nome' => 'Santa Catarina',
            'sigla' => 'SC'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 43,
            'nome' => 'Rio Grande do Sul',
            'sigla' => 'RS'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 50,
            'nome' => 'Mato Grosso do Sul',
            'sigla' => 'MS'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 51,
            'nome' => 'Mato Grosso',
            'sigla' => 'MT'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 52,
            'nome' => 'Goiás',
            'sigla' => 'GO'
        ]);

        BrasilUF::firstOrCreate([
            'id' => 53,
            'nome' => 'Distrito Federal',
            'sigla' => 'DF'
        ]);

    }
}
