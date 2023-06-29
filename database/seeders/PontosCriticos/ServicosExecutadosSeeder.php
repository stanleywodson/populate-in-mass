<?php

namespace Database\Seeders\PontosCriticos;

use App\Models\PontosCriticos\ServicosExecutados\ServicosExecutados;
use Illuminate\Database\Seeder;

class ServicosExecutadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.pontoscriticos');

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            ServicosExecutados::factory(1)
                ->hasServicosExecutadosDados(1, $array)
                ->create();
        }
    }
}
