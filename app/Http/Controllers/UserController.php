<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        //        $this->middleware('userAgent')->except('index');
        $this->user = $user;
    }
    public function index()
    {

        //     $dados = $this->user->select('name', 'email')->find(1);

        $dados = $this->user->all();
        return response()->json($dados);

        Carbon::setLocale('pt-BR');
        $result = $this->user->all()->map(
            fn ($item) => (object)
            [
                'name' => strtoupper($item->name),
                'email' => $item->email,
                'data' => $item->created_at->diffForHumans()
            ]
        );

        foreach ($result as $dado) {
            echo "Nome:   {$dado->name}  - E-mail:   {$dado->email} - Postado  {$dado->data} <br>";
        }
    }

    public function store(Request $request)
    {

        $test = $this->user->insert(
            [
                "id_anexo" => "1",
                "id_contrato_execucao" => "36",
                "id_documento_tipo_anexo" => "1",
                "vinculo" => 'sta',
                "informacao_complementar" => 'wod',
                "nome_original_arquivo" => 'son',
                "novo_nome_arquivo" => 'null',
                "caminho_arquivo" => 'null',
                "id_usuario" => "338",
                "data_cadastro" => NULL
            ]

        );

        if ($test) {
            dd('passou');
        } else {
            dd('nao passou');
        }
    }
}
