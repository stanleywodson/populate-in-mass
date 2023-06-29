<?php

namespace App\Models\PontosCriticos\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_resumo_equipe';

    public $timestamps = false;

    protected $primaryKey = 'cod_equipe_mobilizada_executora';

    protected $fillable = [
        'id_resumo_mobilizacao',
        'id_contrato_execucao',
        'nome_funcionario',
        'cpf',
        'funcao',
        'frente_servico',
        'id_usuario',
        'data_cadastro'
    ];

    public function resumoMobilizacao()
    {
        return $this->belongsTo(ResumoMobilizacao::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
}
