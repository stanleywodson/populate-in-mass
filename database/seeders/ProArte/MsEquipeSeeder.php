<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\MobilizacaoSupervisora\Equipe;
use Illuminate\Database\Seeder;

class MsEquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipe::factory(10)->create();
    }
}
