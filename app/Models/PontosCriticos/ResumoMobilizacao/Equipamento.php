<?php

namespace App\Models\PontosCriticos\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_resumo_equipamento';

    public $timestamps = false;

    protected $primaryKey = 'cod_equipamento_executora';

    protected $fillable = [
        'id_resumo_mobilizacao',
        'id_contrato_execucao',
        'item',
        'descricao',
        'quantidade' ,
        'frente_servico',
        'id_usuario',
        'data_cadastro'
    ];

    public function resumoMobilizacao()
    {
        return $this->belongsTo(ResumoMobilizacao::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
}
