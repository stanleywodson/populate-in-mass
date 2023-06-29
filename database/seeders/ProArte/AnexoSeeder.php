<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\Anexo\Anexo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class AnexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.proarte');

        $NumberOfItem = collect()->range(1, 20)->all();
        $tipoAnexoRange = collect()->range(1, 43)->all();

        foreach ($contratoExecucao as $contrato) {
            $array = [
                'id_documento_tipo_anexo' => Arr::random($tipoAnexoRange),
                'vinculo' => Arr::random(['CONTRATO', 'RELATORIO MENSAL']),
                'id_contrato_execucao' => $contrato,
            ];

            Anexo::factory(1)->hasAnexoDados(Arr::random($NumberOfItem), $array)->create();

        }
    }
}
