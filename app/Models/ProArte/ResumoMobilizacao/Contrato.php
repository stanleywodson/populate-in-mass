<?php

namespace App\Models\ProArte\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_resumo_contrato';

    public $timestamps = false;

    protected $primaryKey = 'cod_resumo';


    public function resumoMobilizacao()
    {
        return $this->belongsTo(ResumoMobilizacao::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
}
