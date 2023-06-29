<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResumoMobilizacaoDadosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'stanley' => 'lindo',
            'contrato' => $this->contrato->resumo_contrato === null ? 'dados nao gravados!': $this->contrato->resumo_contrato,
            'instalacao' => $this->instalacao->resumo_instalacao === null ? 'dados nao gravados!': $this->instalacao->resumo_instalacao,
            'equipes' => $this->equipes,
            'equipamentos' => $this->equipamentos
        ];
    }
}
