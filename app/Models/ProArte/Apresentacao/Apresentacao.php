<?php

namespace App\Models\ProArte\Apresentacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apresentacao extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_apresentacao';

    public $timestamps = false;

    protected $primaryKey = 'cod_apresentacao';

}
