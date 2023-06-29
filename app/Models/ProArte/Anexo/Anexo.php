<?php

namespace App\Models\ProArte\Anexo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_anexo';

    public $timestamps = false;

    protected $primaryKey = 'cod_anexo';


    public function anexoDados()
    {
        return $this->hasMany(AnexoDados::class, 'id_anexo', 'cod_anexo');
    }
}
