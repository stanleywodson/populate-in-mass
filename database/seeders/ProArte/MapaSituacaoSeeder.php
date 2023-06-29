<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\MapaSituacao\MapaSituacao;
use Illuminate\Database\Seeder;

class MapaSituacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.proarte');

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            MapaSituacao::factory(1)
                ->hasMapaSituacaoDados(1, $array)
                ->create();
        }
    }
}
