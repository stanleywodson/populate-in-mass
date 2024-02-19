<?php

namespace Database\Factories\PontosCriticos\ControleTecnologico;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontosCriticos\PlanoTrabalho\PlanoTrabalhoDados>
 */
class ControleTecnologicoDadosFactory extends Factory
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
            'justificativa_explicacao' => fake()->text(3000),
            'nome_original_arquivo_elemento' => fake()->name(),
            'novo_nome_arquivo_elemento' => fake()->name(),
            'caminho_arquivo_elemento' => 'uploads/populate_mass/'.$arquivo.'.pdf',
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
