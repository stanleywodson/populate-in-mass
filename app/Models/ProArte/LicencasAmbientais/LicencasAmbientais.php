<?php

namespace App\Models\ProArte\LicencasAmbientais;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicencasAmbientais extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_licenca_ambiental';

    public $timestamps = false;

    protected $primaryKey = 'cod_licenca_ambiental';


    public function licencasAmbientaisDados()
    {
        return $this->hasOne(LicencasAmbientaisDados::class, 'id_licenca_ambiental', 'cod_licenca_ambiental');
    }
}
