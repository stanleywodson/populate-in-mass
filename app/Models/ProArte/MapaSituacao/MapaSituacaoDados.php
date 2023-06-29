<?php

namespace App\Models\ProArte\MapaSituacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapaSituacaoDados extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_mapa_situacao_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_mapa_situacao_dados';

    public function mapaSituacao()
    {
        return $this->belongsTo(MapaSituacao::class, 'id_mapa_situacao', 'cod_mapa_situacao');
    }
}
