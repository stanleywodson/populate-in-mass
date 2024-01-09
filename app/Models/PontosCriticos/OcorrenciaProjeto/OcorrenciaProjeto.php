<?php

namespace App\Models\PontosCriticos\OcorrenciaProjeto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OcorrenciaProjeto extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_ocorrencia_projeto';

    public $timestamps = false;

    protected $primaryKey = 'cod_ocorrencia_projeto';


    public function ocorrenciaProjetoDados()
    {
        return $this->hasOne(OcorrenciaProjetoDados::class, 'id_ocorrencia_projeto', 'cod_ocorrencia_projeto');
    }
}
