<?php

namespace App\Models\ProArte\Anexo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnexoDados extends Model
{
    use HasFactory;

    protected $table = 'pro_rm_anexo_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_anexo_dados';


    public function anexo()
    {
        return $this->belongsTo(Anexo::class, 'id_anexo', 'cod_anexo');
    }
}
