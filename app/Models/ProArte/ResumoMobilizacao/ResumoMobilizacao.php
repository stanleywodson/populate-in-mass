<?php

namespace App\Models\ProArte\ResumoMobilizacao;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumoMobilizacao extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_resumo_mobilizacao';

    public $timestamps = false;

    protected $primaryKey = 'cod_resumo_mobilizacao';


    public function contrato()
    {
        return $this->hasOne(Contrato::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
    }
    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'id_resumo_mobilizacao', 'cod_resumo_mobilizacao');
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
