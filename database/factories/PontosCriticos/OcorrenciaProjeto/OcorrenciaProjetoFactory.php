<?php

namespace Database\Factories\PontosCriticos\OcorrenciaProjeto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontosCriticos\OcorrenciaProjeto\OrdemServicos>
 */
class OcorrenciaProjetoFactory extends Factory
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
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s'),
        ];
    }
}
