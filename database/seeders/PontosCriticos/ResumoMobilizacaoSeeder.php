<?php

namespace Database\Seeders\PontosCriticos;

use App\Models\PontosCriticos\ResumoMobilizacao\ResumoMobilizacao;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ResumoMobilizacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $contratoExecucao = config('contratoexecucao.pontoscriticos');

        $equipe = collect()->range(10, 50)->all();
        $equipamento = collect()->range(10, 100)->all();
        

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            ResumoMobilizacao::factory(1)
                ->hasContrato(1, $array)
                ->hasInstalacao(1, $array)
                ->hasEquipes(Arr::random($equipe), $array)
                ->hasEquipamentos(Arr::random($equipamento), $array)
                ->create();

        }
    }
}
