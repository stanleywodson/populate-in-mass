<?php

namespace App\Models\PontosCriticos\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_mobilizacao_equipe';

    public $timestamps = false;

    protected $primaryKey = 'cod_equipe_mobilizada';


    protected $fillable = [
        'id_mobilizacao',
        'nome_funcionario',
        'cpf',
        'funcao',
        'frente_servico',
        'id_usuario',
        'data_cadastro'
    ];
}
