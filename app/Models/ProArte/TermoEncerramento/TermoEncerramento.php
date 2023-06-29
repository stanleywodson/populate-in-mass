<?php

namespace App\Models\ProArte\TermoEncerramento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermoEncerramento extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_termo_encerramento';

    public $timestamps = false;

    protected $primaryKey = 'cod_termo_encerramento';
}
