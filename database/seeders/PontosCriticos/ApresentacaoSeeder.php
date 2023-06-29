<?php

namespace Database\Seeders\PontosCriticos;

use App\Models\PontosCriticos\Apresentacao\Apresentacao;
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
