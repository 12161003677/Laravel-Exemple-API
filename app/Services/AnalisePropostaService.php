<?php

namespace App\Services;

use App\Repositories\Contracts\{
    AnalisePropostaRepositoryInterface,
    AnalisePessoaPropostaRepositoryInterface,
};
use App\Repositories\Eloquent\PropostaRepository;
use App\Services\KeysInterfaceService;

/**
 * Service Layer - Class responsible for managing the proposal analysis process
 *
 * @author Eliezer Alves
 * @since 31/05/2021
 *
 */
class AnalisePropostaService
{
    private $propostaRepository;
    private $analisePropostaRepository;
    private $analisePessoaPropostaRepository;
    private $keysInterfaceService;

    public function __construct(AnalisePropostaRepositoryInterface $analisePropostaRepository, AnalisePessoaPropostaRepositoryInterface $analisePessoaPropostaRepository, PropostaRepository $propostaRepository, KeysInterfaceService $keysInterfaceService)
    {
        $this->analisePropostaRepository = $analisePropostaRepository;
        $this->analisePessoaPropostaRepository = $analisePessoaPropostaRepository;
        $this->propostaRepository = $propostaRepository;
        $this->keysInterfaceService = $keysInterfaceService;
    }


    /**
     * Service Layer - Method responsible for standardizing related to the conclusion
     * of the analysis of the proposal
     *
     * @param  array  $attributes
     * @param  int  $idProposta
     * @param  int  $idAnaliseProposta
     * @return array $attributes
     */
    private function nomralizeAttributes($attributes, $idProposta, $idAnaliseProposta)
    {
        $attributes['cliente']['id_proposta'] = $idProposta;
        $attributes['cliente']['id_analise_proposta'] = $idAnaliseProposta;

        $attributes['representante']['id_proposta'] = $idProposta;
        $attributes['representante']['id_analise_proposta'] = $idAnaliseProposta;

        foreach ($attributes['socios'] as $key => $socio) {
            $attributes['socios'][$key]['id_proposta'] = $idProposta;
            $attributes['socios'][$key]['id_analise_proposta'] = $idAnaliseProposta;
        }
        return $attributes;
    }

    /**
     * Service Layer - Method responsible for registering proposal analysis.
     *
     * @param  array  $attributes
     * @param  int  $idProposta
     * @return App\Repositories\Contracts\AnalisePropostaRepositoryInterface
     */
    public function registrarAnaliseProposta($attributes, $idProposta)
    {
        $attributtesAnaliseProposta = $this->keysInterfaceService->hydrator($attributes, $this->keysInterfaceService->registrarAnaliseProposta());
        return $this->analisePropostaRepository->registrarAnaliseProposta($attributtesAnaliseProposta, $idProposta);
    }

    /**
     * Service Layer - Method responsible for registering proposal analysis.
     *
     * @param  array  $attributes
     * @param  int  $idProposta
     * @return App\Repositories\Contracts\AnalisePropostaRepositoryInterface
     */
    public function registrarAnalisePessoaProposta($attributes)
    {
        $attributesAnalisePessoaProposta = $this->keysInterfaceService->hydrator($attributes, $this->keysInterfaceService->registrarAnalisePessoaProposta());
        return $this->analisePessoaPropostaRepository->registrarAnalisePessoaProposta($attributesAnalisePessoaProposta);
    }

    /**
     * Service Layer - Method responsible for completing the analysis of the proposal.
     *
     * @param  array  $attributes
     * @param  int  $idProposta
     * @return App\Repositories\Contracts\AnalisePropostaRepositoryInterface
     */
    public function concluirAnaliseProposta($attributes, $idProposta)
    {
        /*
        |--------------------------------------------------------------------------
        | Proposta
        |--------------------------------------------------------------------------
        |
        | Changing proposal review status
        */
        $this->propostaRepository->alterarStatusAnalise($attributes['id_status_analise_proposta'], $idProposta);


        /*
        |--------------------------------------------------------------------------
        | Análise Proposta
        |--------------------------------------------------------------------------
        |
        | Registering proposal analysis
        */
        $analiseProposta = $this->registrarAnaliseProposta($attributes, $idProposta);


        /*
        |--------------------------------------------------------------------------
        | Attributes
        |--------------------------------------------------------------------------
        |
        | Normalizing attributes to continue the process
        */
        $attributes = $this->nomralizeAttributes($attributes, $idProposta, $analiseProposta->getKey());


        /*
        |--------------------------------------------------------------------------
        | Análise Pessoa Proposta
        |--------------------------------------------------------------------------
        |
        | Registering customer review of the proposal
        */
        $analiseClienteProposta = $this->registrarAnalisePessoaProposta($attributes['cliente']);


        /*
        |--------------------------------------------------------------------------
        | Análise Pessoa Proposta
        |--------------------------------------------------------------------------
        |
        | Registering analysis of the legal representative related to the proposal
        */
        $analiseRepresentanteProposta = $this->registrarAnalisePessoaProposta($attributes['representante']);


        /*
        |--------------------------------------------------------------------------
        | Análise Pessoa Proposta
        |--------------------------------------------------------------------------
        |
        | Registering analysis of the partners related to the proposal
        */
        $analiseSociosProposta = [];
        foreach ($attributes['socios'] as $socio) {
            $analiseSocioProposta = $this->registrarAnalisePessoaProposta($socio);
            array_push($analiseSociosProposta, $analiseSocioProposta);
        }

        return [
            'analise_proposta' => $analiseProposta,
            'analise_cliente_proposta' => $analiseClienteProposta,
            'analise_representante_proposta' => $analiseRepresentanteProposta,
            'analise_socios_proposta' => $analiseSociosProposta,
        ];
    }
}
