<?php

namespace Database\Factories\PontosCriticos\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontosCriticos\ResumoMobilizacao\Contrato>
 */
class ContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_resumo_mobilizacao' => 1,
            'id_contrato_execucao' => 36,
            'resumo_contrato' => fake()->text(3000),
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
