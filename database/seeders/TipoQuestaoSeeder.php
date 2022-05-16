<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoQuestao;

class TipoQuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoQuestao::firstOrCreate([
            'id' => 1,
            'nome' => 'Múltipla escolha',
            'descricao' => 'Questões objetivas de múltipla escolha, trazem enunciadas as possibilidades de resposta entre as quais o colaborador escolhe a única que responde corretamente à solicitação ou questionamentos propostos.'
        ]);

        TipoQuestao::firstOrCreate([
            'id' => 2,
            'nome' => 'Discursiva',
            'descricao' => 'Questões discursivas, podem ser chamadas de dissertativas, abertas, descritivas ou de resposta livre e permitem que você avalie, por exemplo, a criação de argumentos, a análise de resultados, a coerência/coesão das ideias.'
        ]);
    }
}
