<?php

namespace App\Http\Controllers\Api\PontosCriticos;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResumoMobilizacaoDadosResource;
use App\Http\Resources\RmContratoResource;
use App\Models\PontosCriticos\ResumoMobilizacao\{
    Contrato,
    Equipamento,
    Equipe,
    Endereco,
    ResumoMobilizacao
};


use Illuminate\Http\Request;

class ResumoMobilizacaoApiController extends Controller
{
//    private $contrato;
//    private $instalacao;
//    private $equipe;
//    private $equipamento;
    private $resumoMobilizacao;

    public function __construct(ResumoMobilizacao $resumoMobilizacao) //Contrato $contrato, Instalacao $instalacao, Equipe $equipe, Equipamento $equipamento,
    {
//        $this->contrato = $contrato;
//        $this->instalacao = $instalacao;
//        $this->equipe = $equipe;
//        $this->equipamento = $equipamento;
        $this->resumoMobilizacao = $resumoMobilizacao;
    }

    public function index()
    {
        $contratos = $this->resumoMobilizacao
            ->with('contrato', 'instalacao', 'equipes', 'equipamentos')
            ->get();

        if (!$contratos) return response()->json(['message' => 'Nenhum Contrato Encontrado'], 404);

        return ResumoMobilizacaoDadosResource::collection($contratos);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $insert = Contrato::updateOrInsert(
            ['id_resumo_mobilizacao' => 1],
            [
                'resumo_contrato' => $request->resumo_contrato,
                'data_cadastro' => date('Y-m-d\TH:i:s'),
            ]);

        if (!$insert) return response()->json(['message' => 'Algo deu errado!'], 404);

        return response()->json(['message' => 'Cadastrado com sucesso!'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contrato = $this->resumoMobilizacao
            ->with('contrato', 'instalacao', 'equipes', 'equipamentos')
            ->find($id);

        if (!$contrato) return response()->json(['message' => 'Nenhum Contrato Encontrado'], 404);

        return new ResumoMobilizacaoDadosResource($contrato);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
