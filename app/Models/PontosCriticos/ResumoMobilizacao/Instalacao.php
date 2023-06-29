<?php

namespace App\Models\PontosCriticos\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instalacao extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_resumo_instalacao';

    public $timestamps = false;

    protected $primaryKey = 'cod_resumo';

    public function resumoMobilizacao()
    {
        return $this->belongsTo(ResumoMobilizacao::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
}
