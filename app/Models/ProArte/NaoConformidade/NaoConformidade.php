<?php

namespace App\Models\ProArte\NaoConformidade;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaoConformidade extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_nao_conformidade';

    public $timestamps = false;

    protected $primaryKey = 'cod_nao_conformidade';


    public function naoConformidadeDados()
    {
        return $this->hasMany(NaoConformidadeDados::class, 'id_nao_conformidade', 'cod_nao_conformidade');
    }
}
