<?php

namespace Database\Factories\PontosCriticos\TermoEncerramento;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontosCriticos\TermoEncerramento\TermoEncerramento>
 */
class TermoEncerramentoFactory extends Factory
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
            'termo_encerramento' => fake()->text(3000),
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s')
        ];
    }
}
