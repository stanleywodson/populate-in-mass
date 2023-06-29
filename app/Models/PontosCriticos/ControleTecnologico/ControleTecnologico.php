<?php

namespace App\Models\PontosCriticos\PlanoTrabalho;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControleTecnologico extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_controle_tecnologico';

    public $timestamps = false;

    protected $primaryKey = 'cod_controle_tecnologico';


    public function controleTecnologicoDados()
    {
        return $this->hasOne(PlanoTrabalhoDados::class, 'id_controle_tecnologico', 'cod_controle_tecnologico');
    }
}
