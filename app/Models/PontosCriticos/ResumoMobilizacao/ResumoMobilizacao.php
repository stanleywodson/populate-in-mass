<?php

namespace App\Models\PontosCriticos\ResumoMobilizacao;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumoMobilizacao extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_resumo_mobilizacao';

    public $timestamps = false;

    protected $primaryKey = 'cod_resumo_mobilizacao';

    protected $fillable = [
        'id_rm',
        'nao_se_aplica',
        'id_usuario',
        'data_cadastro'
    ];


    public function contrato()
    {
        return $this->hasOne(Contrato::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
    public function instalacao()
    {
        return $this->hasOne(Instalacao::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }

    public function equipes()
    {
        return $this->hasMany(Equipe::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }

    public function equipamentos()
    {
        return $this->hasMany(Equipamento::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
}
