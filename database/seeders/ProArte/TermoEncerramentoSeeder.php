<?php

namespace Database\Seeders\ProArte;

use App\Models\ProArte\TermoEncerramento\TermoEncerramento;
use Illuminate\Database\Seeder;

class TermoEncerramentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TermoEncerramento::factory(1)->create();
    }
}
