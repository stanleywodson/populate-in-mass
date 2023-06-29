<?php

namespace App\Models\PontosCriticos\RelatorioFotografico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatorioFotografico extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_relatorio_fotografico';

    public $timestamps = false;

    protected $primaryKey = 'cod_relatorio_fotografico';


    public function relatorioFotograficoDados()
    {
        return $this->hasMany(RelatorioFotograficoDados::class, 'id_relatorio_fotografico', 'cod_relatorio_fotografico');
    }
}
