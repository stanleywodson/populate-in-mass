<?php

namespace App\Models\PontosCriticos\TermoEncerramento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermoEncerramento extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_termo_encerramento';

    public $timestamps = false;

    protected $primaryKey = 'cod_termo_encerramento';
}
