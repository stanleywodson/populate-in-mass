<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\Apresentacao\Apresentacao;
use Illuminate\Database\Seeder;

class ApresentacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apresentacao::factory(1)->create();
    }
}
