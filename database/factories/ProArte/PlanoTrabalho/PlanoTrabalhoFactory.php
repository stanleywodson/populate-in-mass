<?php

namespace Database\Factories\ProArte\PlanoTrabalho;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProArte\PlanoTrabalho\PlanoTrabalho>
 */
class PlanoTrabalhoFactory extends Factory
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
            'nao_se_aplica' => 0,
            'id_usuario' => 338,
            'data_cadastro' => date('Y-m-d\TH:i:s'),
        ];
    }
}
