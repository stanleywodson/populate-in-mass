<?php

namespace App\Models\PontosCriticos\Apresentacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apresentacao extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_apresentacao';

    public $timestamps = false;

    protected $primaryKey = 'cod_apresentacao';

    protected $fillable = [
        'id_rm',
        'informacao_geral',
        'id_usuario',
        'data_cadastro'
    ];
}
