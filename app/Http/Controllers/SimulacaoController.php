<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SimulacaoRequest;
use App\Services\SimulacaoService;

/**
 *
 * @author Eliezer Alves
 * @since 03/2021
 *
 */
class SimulacaoController extends Controller
{

    public function __construct(SimulacaoService $service)
    {
        parent::__construct($service);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SimulacaoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function novaSimulacao(Request $request)
    {
        return $this->service->novaSimulacao($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idSimulacao
     * @return \Illuminate\Http\Response
     */
    public function show($idSimulacao)
    {
        return $this->service->show($idSimulacao);
    }
}
