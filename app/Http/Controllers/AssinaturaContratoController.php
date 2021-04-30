<?php

namespace App\Http\Controllers;

use App\Services\AssinaturaContratoService;

/**
 * Class responsible for managing the
 * signing of Ágil contracts
 *
 * @author Eliezer Alves
 * @since 28/04/2021
 *
 */
class AssinaturaContratoController extends Controller
{
    public function __construct(AssinaturaContratoService $service)
    {
        parent::__construct($service);
    }

    /**
     * Show page to sign the first part of the contract.
     *
     * @since 28/04/2021
     *
     * @param  int  $idProposta
     * @return \Illuminate\View\View
     */
    public function aceite1($idProposta)
    {
        $data = $this->service->dadosProposta($idProposta);
        return view('assinatura-contrato.pj.c_1', $data);
    }

    /**
     * Show page to sign the second part of the contract.
     *
     * @since 28/04/2021
     *
     * @param  string $hash
     * @return \Illuminate\View\View
     */
    public function aceite2($idProposta)
    {
        $data = $this->service->dadosProposta($idProposta);
        return view('assinatura-contrato.pj.c_2', $data);
    }
}
