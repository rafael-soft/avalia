<?php

namespace Database\Seeders;

use App\Models\TipoQuestao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            TipoPessoaSeeder::class,
            TipoQuestaoSeeder::class,
            TipoTelefoneSeeder::class,
            GeneroPessoaSeeder::class,
            BrasilUFSeeder::class
        ]);
    }
}
