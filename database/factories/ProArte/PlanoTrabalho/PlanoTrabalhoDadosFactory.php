<?php

namespace Database\Factories\ProArte\PlanoTrabalho;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\PlanoTrabalho\PlanoTrabalhoDados>
 */
class PlanoTrabalhoDadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arquivo = Arr::random(['arquivo1', 'arquivo2','arquivo3','arquivo4','arquivo5','arquivo6']);

        return [
            'id_contrato_execucao' => 36,
            'consideracao_tecnica' => fake()->text(3000),
            'nome_original_arquivo' => fake()->name(),
            'novo_nome_arquivo' => fake()->name(),
            'caminho_arquivo' => 'uploads/pontoscriticos/anexos/'.$arquivo.'.pdf',
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
