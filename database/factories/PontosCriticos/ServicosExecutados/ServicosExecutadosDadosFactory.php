<?php

namespace Database\Factories\PontosCriticos\ServicosExecutados;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontosCriticos\ServicosExecutados\ServicosExecutadosDados>
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
        $arquivo = Arr::random(['arquivo11', 'arquivo12', 'arquivo13', 'arquivo14', 'arquivo15']);

        return [
            'id_contrato_execucao' => 36,
            'resumo_servico_executado' => fake()->text(3000),
            'nome_original_arquivo_cro_fis' => fake()->name(),
            'novo_nome_arquivo_cro_fis' => fake()->name(),
            'caminho_arquivo_cro_fis' => 'uploads/populate_mass/'.$arquivo.'.xlsx',
            'nome_original_arquivo_ser_exe' => fake()->name(),
            'novo_nome_arquivo_ser_exe' => fake()->name(),
            'caminho_arquivo_ser_exe' => 'uploads/populate_mass/'.$arquivo.'.xlsx',
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
