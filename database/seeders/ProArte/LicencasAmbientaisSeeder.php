<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\LicencasAmbientais\LicencasAmbientais;
use Illuminate\Database\Seeder;

class LicencasAmbientaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratoExecucao = config('contratoexecucao.proarte');

        foreach ($contratoExecucao as $contrato) {

            $array = ['id_contrato_execucao' => $contrato];

            LicencasAmbientais::factory(1)
                ->hasLicencasAmbientaisDados(1, $array)
                ->create();
        }
    }
}
