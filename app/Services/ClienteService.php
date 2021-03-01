<?php

namespace App\Services;

use App\Repositories\Contracts\ClienteRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;


class ClienteService
{

    protected $clienteRepository;
    protected $userRepository;

    public function __construct(ClienteRepositoryInterface $clienteRepository, UserRepositoryInterface $userRepository)
    {
        $this->clienteRepository = $clienteRepository;
        $this->userRepository = $userRepository;
    }

    public function all()
    {
        return $this->clienteRepository->all();
    }

    public function create($request)
    {
        $request = _normalizeRequest($request->all());
        $request['senha'] = Hash::make($request['senha']);

        $cliente = $this->clienteRepository->create($request);

        if (!$cliente->id_cliente)
            return $cliente;

        $user = $this->userRepository->create((array) [
            'name' => $request['nome_fantasia'],
            'email' => $request['email'],
            'username' => $request['cnpj'],
            'password' => $request['senha']
        ]);

        $cliente->user = $user;

        return $cliente;
    }

    public function findOrFail($idCliente)
    {
        return $this->clienteRepository->findOrFail($idCliente);
    }

    public function update($request, $idCliente)
    {
        $request = _normalizeRequest($request->all());

        return $this->clienteRepository->update($request, $idCliente);
    }

    public function delete($idCliente)
    {
        return $this->clienteRepository->delete($idCliente);
    }
}
