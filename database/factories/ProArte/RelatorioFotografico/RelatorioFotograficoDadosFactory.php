<?php

namespace Database\Factories\ProArte\RelatorioFotografico;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\RelatorioFotografico\RelatorioFotograficoDados>
 */
class RelatorioFotograficoDadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arquivo1 = Arr::random(['arquivo1', 'arquivo2','arquivo3','arquivo4','arquivo5','arquivo6']);
        $arquivo2 = Arr::random(['arquivo1', 'arquivo2','arquivo3','arquivo4','arquivo5','arquivo6']);
        $arquivo3 = Arr::random(['arquivo1', 'arquivo2','arquivo3','arquivo4','arquivo5','arquivo6']);

        return [
            'id_contrato_execucao' => 36,
            'id_relatorio_fotografico' => 1,
            'codigo_snv' => fake()->buildingNumber(),
            'localizacao' => fake()->locale(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),

            'data_antes' => date('Y-m-d\TH:i:s'),
            'nome_original_arquivo_antes' => fake()->name(),
            'novo_nome_arquivo_antes' => fake()->name(),
            'caminho_arquivo_antes' => 'uploads/populate_mass/'.$arquivo1.'.pdf',

            'data_durante' => date('Y-m-d\TH:i:s'),
            'nome_original_arquivo_durante' => fake()->name(),
            'novo_nome_arquivo_durante' => fake()->name(),
            'caminho_arquivo_durante' => 'uploads/populate_mass/'.$arquivo2.'.pdf',

            'data_depois' => date('Y-m-d\TH:i:s'),
            'nome_original_arquivo_depois' => fake()->name(),
            'novo_nome_arquivo_depois' => fake()->name(),
            'caminho_arquivo_depois' => 'uploads/populate_mass/'.$arquivo3.'.pdf',

            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s'),
        ];
    }
}
