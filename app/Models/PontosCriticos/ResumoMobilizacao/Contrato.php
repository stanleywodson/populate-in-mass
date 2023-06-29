<?php

namespace App\Models\PontosCriticos\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_resumo_contrato';

    public $timestamps = false;

    protected $primaryKey = 'cod_resumo';

    protected $fillable = [
        'id_resumo_mobilizacao',
        'id_contrato_execucao',
        'resumo_contrato',
        'id_usuario',
        'data_cadastro'
    ];

    public function resumoMobilizacao()
    {
        return $this->belongsTo(ResumoMobilizacao::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
}
