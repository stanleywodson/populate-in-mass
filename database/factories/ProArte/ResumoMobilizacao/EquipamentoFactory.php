<?php

namespace Database\Factories\ProArte\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\ResumoMobilizacao\Equipamento>
 */
class EquipamentoFactory extends Factory
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
            'item' => fake()->name(),
            'descricao' => fake()->paragraph(),
            'quantidade' => Arr::random(collect()->range(1, 500)->all()),
            'frente_servico' => fake()->name(),
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
