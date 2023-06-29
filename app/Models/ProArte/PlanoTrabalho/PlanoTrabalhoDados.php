<?php

namespace App\Models\ProArte\PlanoTrabalho;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoTrabalhoDados extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_plano_trabalho_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_plano_trabalho_dados';

    public function planoTrabalho()
    {
        return $this->belongsTo(PlanoTrabalho::class, 'id_plano_trabalho', 'cod_plano_trabalho');
    }
}
