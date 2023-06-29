<?php

namespace App\Models\ProArte\MapaSituacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapaSituacao extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_mapa_situacao';

    public $timestamps = false;

    protected $primaryKey = 'cod_mapa_situacao';


    public function mapaSituacaoDados()
    {
        return $this->hasOne(MapaSituacaoDados::class, 'id_mapa_situacao', 'cod_mapa_situacao');
    }
}
