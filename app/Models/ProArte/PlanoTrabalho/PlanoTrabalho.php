<?php

namespace App\Models\ProArte\PlanoTrabalho;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoTrabalho extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_plano_trabalho';

    public $timestamps = false;

    protected $primaryKey = 'cod_plano_trabalho';


    public function planoTrabalhoDados()
    {
        return $this->hasOne(PlanoTrabalhoDados::class, 'id_plano_trabalho', 'cod_plano_trabalho');
    }
}
