<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\OrdemServicos\OrdemServicos;
use Illuminate\Database\Seeder;

class OrdemServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.proarte');

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            OrdemServicos::factory(1)
                ->hasOrdemServicosDados(1, $array)
                ->create();
        }
    }
}
