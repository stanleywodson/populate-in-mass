<?php

namespace Database\Factories\ProArte\NaoConformidade;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\NaoConformidade\NaoConformidadeDados>
 */
class NaoConformidadeDadosFactory extends Factory
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
            'id_nao_conformidade' => 1,

            'item' => fake()->streetAddress(),
            'data_naoconf' => date('Y-m-d\TH:i:s'),
            'codigo_snv_naoconf' => fake()->buildingNumber(),
            'localizacao' => fake()->city(),
            'longitude' => fake()->latitude(),
            'latitude' => fake()->latitude(),
            'km_inicial' => fake()->latitude(),
            'km_final' => fake()->latitude(),

            'descricao_naoconf' => fake()->paragraph(),
            'providencia_recomendada' => fake()->paragraph(),
            'data_providencia' => date('Y-m-d\TH:i:s'),
            'providencia_adotada' => fake()->paragraph(),

            'nome_original_arquivo_antes' => fake()->name(),
            'novo_nome_arquivo_antes' => fake()->name(),
            'caminho_arquivo_antes' => 'uploads/pontoscriticos/anexos/'.$arquivo1.'.pdf',

            'nome_original_arquivo_durante' => fake()->name(),
            'novo_nome_arquivo_durante' => fake()->name(),
            'caminho_arquivo_durante' => 'uploads/pontoscriticos/anexos/'.$arquivo1.'.pdf',

            'nome_original_arquivo_depois' => fake()->name(),
            'novo_nome_arquivo_depois' => fake()->name(),
            'caminho_arquivo_depois' => 'uploads/pontoscriticos/anexos/'.$arquivo1.'.pdf',

            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s'),
        ];


    }
}
