<?php

namespace App\Repositories\Contracts;

interface UrlSicredRepositoryInterface extends AbstractRepositoryInterface
{
    public function servico(string $servico);
}