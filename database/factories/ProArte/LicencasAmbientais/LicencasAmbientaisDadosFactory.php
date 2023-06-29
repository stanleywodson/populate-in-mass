<?php

namespace Database\Factories\ProArte\LicencasAmbientais;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\LicencasAmbientais\LicencasAmbientaisDados>
 */
class LicencasAmbientaisDadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_contrato_execucao' => 36,
            'resumo_situacao' => fake()->text(5000),
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
