<?php

namespace Database\Factories\PontosCriticos\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontosCriticos\MobilizacaoSupervisora\Equipamento>
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
            'id_mobilizacao' => 1,
            'item' => fake()->name(),
            'descricao' => fake()->paragraph(),
            'quantidade' => Arr::random(collect()->range(1, 500)->all()),
            'frente_servico' => fake()->jobTitle(),
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
