<?php

namespace App\Models\PontosCriticos\Anexo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnexoDados extends Model
{
    use HasFactory;

    protected $table = 'pon_rm_anexo_dados';

    public $timestamps = false;

    protected $primaryKey = 'cod_anexo_dados';


    protected $fillable = [
        'id_anexo',
        'id_contrato_execucao',
        'id_documento_tipo_anexo',
        'vinculo',
        'informacao_complementar',
        'nome_original_arquivo',
        'novo_nome_arquivo',
        'caminho_arquivo',
        'id_usuario',
        'data_cadastro'
    ];

    public function anexo()
    {
        return $this->belongsTo(Anexo::class, 'id_anexo', 'cod_anexo');
    }
}
