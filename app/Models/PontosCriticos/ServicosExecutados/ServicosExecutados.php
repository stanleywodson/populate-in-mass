<?php

namespace App\Models\PontosCriticos\ServicosExecutados;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicosExecutados extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_servico_executado';

    public $timestamps = false;

    protected $primaryKey = 'cod_servico_executado';


    public function servicosExecutadosDados()
    {
        return $this->hasOne(ServicosExecutadosDados::class, 'id_servico_executado', 'cod_servico_executado');
    }
}
