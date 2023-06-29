<?php

namespace App\Models\ProArte\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_mobilizacao_equipe';

    public $timestamps = false;

    protected $primaryKey = 'cod_equipe_mobilizada';

}
