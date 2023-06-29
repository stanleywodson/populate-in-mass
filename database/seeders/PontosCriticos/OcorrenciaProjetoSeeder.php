<?php

namespace Database\Seeders\PontosCriticos;

use App\Models\PontosCriticos\OcorrenciaProjeto\OrdemServicos;
use Illuminate\Database\Seeder;

class OcorrenciaProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.pontoscriticos');

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            OrdemServicos::factory(1)
                ->hasOcorrenciaProjetoDados(1, $array)
                ->create();
        }
    }
}
