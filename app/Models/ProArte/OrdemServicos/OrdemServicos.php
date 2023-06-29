<?php

namespace App\Models\ProArte\OrdemServicos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServicos extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_ordem_servico';

    public $timestamps = false;

    protected $primaryKey = 'cod_ordem_servico';


    public function ordemServicosDados()
    {
        return $this->hasOne(OrdemServicosDados::class, 'id_ordem_servico', 'cod_ordem_servico');
    }
}
