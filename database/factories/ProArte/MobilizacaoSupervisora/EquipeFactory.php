<?php

namespace Database\Factories\ProArte\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\MobilizacaoSupervisora\Equipe>
 */
class EquipeFactory extends Factory
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
            'nome_funcionario' => fake()->name(),
            'cpf' => 45623467866,//fake()->cpf(false),
            'funcao' => fake()->name(),
            'frente_servico' => fake()->title(),
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
