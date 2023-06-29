<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\PlanoTrabalho\PlanoTrabalho;
use Illuminate\Database\Seeder;

class PlanoTrabalhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.proarte');

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            PlanoTrabalho::factory(1)
                ->hasPlanoTrabalhoDados(1, $array)
                ->create();
        }
    }
}
