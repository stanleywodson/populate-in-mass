<?php

namespace App\Models\ProArte\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_mobilizacao_equipamento';

    public $timestamps = false;

    protected $primaryKey = 'cod_equipamento_mobilizado';

}
