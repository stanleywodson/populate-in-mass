<?php

namespace App\Models\PontosCriticos\ControleTecnologico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControleTecnologicoDados extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_controle_tecnologico_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_controle_tec_dados';

    public function controleTecnologico()
    {
        return $this->belongsTo(ControleTecnologico::class, 'id_controle_tecnologico', 'cod_controle_tecnologico');
    }
}
