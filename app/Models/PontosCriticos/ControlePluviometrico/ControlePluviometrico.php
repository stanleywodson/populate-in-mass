<?php

namespace App\Models\PontosCriticos\ControlePluviometrico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlePluviometrico extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_controle_pluviometrico';

    public $timestamps = false;

    protected $primaryKey = 'cod_controle_pluviometrico';


    public function controlePluviometricoDados()
    {
        return $this->hasOne(ControlePluviometricoDados::class, 'id_controle_pluviometrico', 'cod_controle_pluviometrico');
    }
}
