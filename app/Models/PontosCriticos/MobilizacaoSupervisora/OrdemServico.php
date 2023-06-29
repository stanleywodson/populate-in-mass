<?php

namespace App\Models\PontosCriticos\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_mobilizacao';

    public $timestamps = false;

    protected $primaryKey = 'cod_mobilizacao';

}
