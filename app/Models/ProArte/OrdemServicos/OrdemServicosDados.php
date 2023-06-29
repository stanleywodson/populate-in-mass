<?php

namespace App\Models\ProArte\OrdemServicos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServicosDados extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_ordem_servico_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_ordem_servico_dados';

    public function ocorrenciaProjeto()
    {
        return $this->belongsTo(OrdemServicos::class, 'id_ordem_servico', 'cod_ordem_servico');
    }

}
