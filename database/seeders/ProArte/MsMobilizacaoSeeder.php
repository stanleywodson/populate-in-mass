<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\MobilizacaoSupervisora\Mobilizacao;
use Illuminate\Database\Seeder;

class MsMobilizacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mobilizacao::factory(1)->create();
    }
}
