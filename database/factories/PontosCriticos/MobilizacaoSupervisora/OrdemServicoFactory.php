<?php

namespace Database\Factories\PontosCriticos\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontosCriticos\MobilizacaoSupervisora\OrdemServico>
 */
class OrdemServicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arquivo = Arr::random(['arquivo11', 'arquivo12', 'arquivo13', 'arquivo14', 'arquivo15']);

        return [
            'id_rm' => 1,
            'nome_original_arquivo_os' => fake()->name(),
            'novo_nome_arquivo_os' => fake()->name(),
            'caminho_arquivo_os' => 'uploads/populate_mass/' . $arquivo . '.xlsx',
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];

    }
}
