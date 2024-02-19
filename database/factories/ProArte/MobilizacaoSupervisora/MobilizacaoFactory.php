<?php

namespace Database\Factories\ProArte\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\MobilizacaoSupervisora\OrdemServico>
 */
class MobilizacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arquivo = Arr::random(['arquivo1', 'arquivo2', 'arquivo3', 'arquivo4', 'arquivo5', 'arquivo6']);

        return [
            'id_rm' => 1,
            'instalacao' => fake()->text(4000),
            'nome_original_arquivo_curvas' => fake()->name(),
            'novo_nome_arquivo_curvas' => fake()->name(),
            'caminho_arquivo_curvas' => 'uploads/populate_mass/' . $arquivo . '.pdf',
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];

    }
}
