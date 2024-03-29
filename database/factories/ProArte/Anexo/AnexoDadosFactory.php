<?php

namespace Database\Factories\ProArte\Anexo;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\Anexo\AnexoDados>
 */
class AnexoDadosFactory extends Factory
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
//            'id_anexo',
            'id_contrato_execucao' => 36,
            'id_documento_tipo_anexo' => 1,
            'vinculo' => 'CONTRATO',
            'informacao_complementar' => fake()->text(1000),
            'nome_original_arquivo' => fake()->name(),
            'novo_nome_arquivo' => fake()->name(),
            'caminho_arquivo' => 'uploads/populate_mass/'.$arquivo.'.pdf',
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
