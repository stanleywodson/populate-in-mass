<?php

namespace App\Models\ProArte\ResumoMobilizacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_resumo_equipe';

    public $timestamps = false;

    protected $primaryKey = 'cod_equipe_mobilizada_executora';


    public function resumoMobilizacao()
    {
        return $this->belongsTo(ResumoMobilizacao::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
}
