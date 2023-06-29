<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\MobilizacaoSupervisora\Equipamento;
use Illuminate\Database\Seeder;

class MsEquipamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipamento::factory(10)->create();
    }
}
