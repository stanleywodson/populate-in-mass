<?php

namespace App\Models\PontosCriticos\OcorrenciaProjeto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OcorrenciaProjetoDados extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_ocorrencia_projeto_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_ocorrencia_projeto_dados';

    public function ocorrenciaProjeto()
    {
        return $this->belongsTo(OrdemServicos::class, 'id_ocorrencia_projeto', 'cod_ocorrencia_projeto');
    }

}
