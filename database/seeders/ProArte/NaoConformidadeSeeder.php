<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\NaoConformidade\NaoConformidade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class NaoConformidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.proarte');

        $NumberOfItem = collect()->range(1, 10)->all();

        foreach ($contratoExecucao as $contrato) {
            $array = [
                'id_contrato_execucao' => $contrato,
            ];

            NaoConformidade::factory(1)->hasNaoConformidadeDados(Arr::random($NumberOfItem), $array)->create();

        }
    }
}
