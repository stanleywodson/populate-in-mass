<?php

namespace App\Models\ProArte\LicencasAmbientais;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicencasAmbientaisDados extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_licenca_ambiental_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_licenca_ambiental_dados';

    public function licencasAmbientaisProjeto()
    {
        return $this->belongsTo(LicencasAmbientais::class, 'id_licenca_ambiental', 'cod_licenca_ambiental');
    }

}
