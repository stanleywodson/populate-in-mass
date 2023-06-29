<?php

namespace Database\Seeders\PontosCriticos;

use App\Models\PontosCriticos\MobilizacaoSupervisora\OrdemServico;
use Illuminate\Database\Seeder;

class MsOrdemServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrdemServico::factory(1)->create();
    }
}
