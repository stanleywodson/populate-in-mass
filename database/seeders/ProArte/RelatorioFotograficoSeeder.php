<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\RelatorioFotografico\RelatorioFotografico;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class RelatorioFotograficoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.proarte');

        $NumberOfItem = collect()->range(1, 10)->all();
        $tipoAnexoRange = collect()->range(1, 30)->all();
        $ponteRange = collect()->range(6436, 6713)->all();

        foreach ($contratoExecucao as $contrato) {
            $array = [
                'id_tipo_servico' => Arr::random($tipoAnexoRange),
                'id_ponte' => Arr::random($ponteRange),
                'id_contrato_execucao' => $contrato,
            ];

            RelatorioFotografico::factory(1)->hasRelatorioFotograficoDados(Arr::random($NumberOfItem), $array)->create();

        }
    }
}
