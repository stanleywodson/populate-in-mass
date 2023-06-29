<?php

namespace Database\Seeders\PontosCriticos;

use App\Models\PontosCriticos\RelatorioFotografico\RelatorioFotografico;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class RelatorioFotograficoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.pontoscriticos');

        $NumberOfItem = collect()->range(1, 5)->all();
        $tipoAnexoRange = collect()->range(1, 30)->all();

        foreach ($contratoExecucao as $contrato) {
            $array = [
                'id_relatorio_fotografico_servico' => Arr::random($tipoAnexoRange),
                'id_contrato_execucao' => $contrato,
            ];

            RelatorioFotografico::factory(1)->hasRelatorioFotograficoDados(Arr::random($NumberOfItem), $array)->create();

        }
    }
}
