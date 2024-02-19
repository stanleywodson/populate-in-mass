<?php

namespace Database\Seeders\PontosCriticos;

use App\Models\PontosCriticos\ControlePluviometrico\ControlePluviometrico;
use Illuminate\Database\Seeder;

class ControlePluviometricoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.pontoscriticos');

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            ControlePluviometrico::factory(1)
                ->hasControlePluviometricoDados(1, $array)
                ->create();
        }
    }
}
