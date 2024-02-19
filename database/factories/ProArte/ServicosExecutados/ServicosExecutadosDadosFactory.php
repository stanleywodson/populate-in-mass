<?php

namespace Database\Factories\ProArte\ServicosExecutados;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\ServicosExecutados\ServicosExecutadosDados>
 */
class ServicosExecutadosDadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arquivo1 = Arr::random(['arquivo1', 'arquivo2', 'arquivo3', 'arquivo4', 'arquivo5', 'arquivo6']);
        $arquivo2 = Arr::random(['arquivo1', 'arquivo2', 'arquivo3', 'arquivo4', 'arquivo5', 'arquivo6']);
        $arquivo3 = Arr::random(['arquivo1', 'arquivo2', 'arquivo3', 'arquivo4', 'arquivo5', 'arquivo6']);

        return [
            'id_contrato_execucao' => 36,
            'resumo_servico_executado' => fake()->text(10000),
            'condicao_tecnica_operacional' => fake()->text(6000),
            'tratativa' => fake()->text(2000),
            'nome_original_arquivo_crono_fisico' => fake()->name(),
            'novo_nome_arquivo_crono_fisico' => fake()->name(),
            'caminho_arquivo_crono_fisico' => 'uploads/populate_mass/'.$arquivo1.'.pdf',
            'nome_original_arquivo_crono_finan' => fake()->name(),
            'novo_nome_arquivo_crono_finan' => fake()->name(),
            'caminho_arquivo_crono_finan' => 'uploads/populate_mass/'.$arquivo2.'.pdf',
            'nome_original_arquivo_curvas' => fake()->name(),
            'novo_nome_arquivo_crono_curvas' => fake()->name(),
            'caminho_arquivo_crono_curvas' => 'uploads/populate_mass/'.$arquivo3.'.pdf',
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
