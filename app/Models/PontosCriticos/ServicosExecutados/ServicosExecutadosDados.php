<?php

namespace App\Models\PontosCriticos\ServicosExecutados;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicosExecutadosDados extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_servico_executado_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_servico_executado_dados';

    public function servicoExecutado()
    {
        return $this->belongsTo(ServicosExecutados::class, 'id_servico_executado', 'cod_servico_executado');
    }
}
