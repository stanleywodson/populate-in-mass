<?php

namespace App\Models\ProArte\MobilizacaoSupervisora;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilizacao extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_mobilizacao';

    public $timestamps = false;

    protected $primaryKey = 'cod_mobilizacao';
}
