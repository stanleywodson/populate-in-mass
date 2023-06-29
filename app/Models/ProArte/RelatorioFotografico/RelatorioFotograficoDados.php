<?php

namespace App\Models\ProArte\RelatorioFotografico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatorioFotograficoDados extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_relatorio_fotografico_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_relatorio_fotografico_dados';

    public function relatorioFotografico()
    {
        return $this->belongsTo(RelatorioFotografico::class, 'id_relatorio_fotografico', 'cod_relatorio_fotografico');
    }
}
