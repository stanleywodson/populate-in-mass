<?php

namespace Database\Seeders\PontosCriticos;

use App\Models\PontosCriticos\PlanoTrabalho\PlanoTrabalho;
use Illuminate\Database\Seeder;

class ControleTecnologicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.pontoscriticos');

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            PlanoTrabalho::factory(1)
                ->hasControleTecnologicoDados(1, $array)
                ->create();
        }
    }
}
