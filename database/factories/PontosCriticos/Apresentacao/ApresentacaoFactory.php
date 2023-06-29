<?php

namespace Database\Factories\PontosCriticos\Apresentacao;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontosCriticos\Apresentacao\Apresentacao>
 */
class ApresentacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_rm' => 1,
            'informacao_geral' => fake()->text(3000),
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
