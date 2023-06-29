<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\ServicosExecutados\ServicosExecutados;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ServicosExecutadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $contratoExecucao = config('contratoexecucao.proarte');

        foreach ($contratoExecucao as $contrato) {
            $array = ['id_contrato_execucao' => $contrato];

            ServicosExecutados::factory(1)
                ->hasServicosExecutadosDados(1, $array)
                ->create();
        }
    }
}
