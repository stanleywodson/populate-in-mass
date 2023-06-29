<?php

namespace Database\Factories\PontosCriticos\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontosCriticos\ResumoMobilizacao\Equipe>
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
            'id_resumo_mobilizacao' => 1,
            'id_contrato_execucao' => 36,
            'nome_funcionario' => fake()->name(),
            'cpf' => 45623467866,//fake()->cpf(false),
            'funcao' => fake()->name(),
            'frente_servico' => fake()->title(),
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
