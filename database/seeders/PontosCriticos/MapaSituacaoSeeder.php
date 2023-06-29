<?php

namespace Database\Seeders\PontosCriticos;

use App\Models\PontosCriticos\MapaSituacao\MapaSituacao;
use Illuminate\Database\Seeder;

class MapaSituacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.pontoscriticos');

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            MapaSituacao::factory(1)
                ->hasMapaSituacaoDados(1, $array)
                ->create();
        }
    }
}
