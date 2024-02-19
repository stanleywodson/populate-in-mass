<?php

namespace App\Models\PontosCriticos\ControlePluviometrico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlePluviometricoDados extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_controle_pluviometrico_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_controle_pluvio_dados';

    public function controlePluviometrico()
    {
        return $this->belongsTo(ControlePluviometrico::class, 'id_controle_pluviometrico', 'cod_controle_pluviometrico');
    }
}
