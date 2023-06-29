<?php

namespace App\Models\ProArte\NaoConformidade;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaoConformidadeDados extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_nao_conformidade_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_nao_conformidade_dados';

    public function naoConformidade()
    {
        return $this->belongsTo(NaoConformidade::class, 'id_nao_conformidade', 'cod_nao_conformidade');
    }
}
