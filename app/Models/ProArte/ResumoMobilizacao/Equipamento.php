<?php

namespace App\Models\ProArte\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_resumo_equipamento';

    public $timestamps = false;

    protected $primaryKey = 'cod_equipamento_executora';

    public function resumoMobilizacao()
    {
        return $this->belongsTo(ResumoMobilizacao::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
}
