<?php

namespace App\Models\PontosCriticos\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_mobilizacao_equipamento';

    public $timestamps = false;

    protected $primaryKey = 'cod_equipamento_mobilizada';


    protected $fillable = [
        'id_mobilizacao',
        'item',
        'descricao',
        'quantidade',
        'frente_servico',
        'id_usuario',
        'data_cadastro'
    ];
}
