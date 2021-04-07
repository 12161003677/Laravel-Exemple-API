<?php

namespace App\Providers;

use App\Repositories\Contracts\{
    AbstractRepositoryInterface,
    AtividadeComercialRepositoryInterface,
    ClienteRepositoryInterface,
    ClientSicredRepositoryInterface,
    ConfiguracaoRepositoryInterface,
    ModeloSicredRepositoryInterface,
    PessoaAssinaturaRepositoryInterface,
    PropostaRepositoryInterface,
    TipoLogradouroRepositoryInterface,
    UserRepositoryInterface
};
use App\Repositories\Eloquent\{
    AbstractRepository,
    AtividadeComercialRepository,
    ClienteRepository,
    ClientSicredRepository,
    ConfiguracaoRepository,
    ModeloSicredRepository,
    PessoaAssinaturaRepository,
    PropostaRepository,
    TipoLogradouroRepository,
    UserRepository
};

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any Repository Patters.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AbstractRepositoryInterface::class,
            AbstractRepository::class
        );

        $this->app->bind(
            ClienteRepositoryInterface::class,
            ClienteRepository::class
        );

        $this->app->bind(
            AtividadeComercialRepositoryInterface::class,
            AtividadeComercialRepository::class
        );

        $this->app->bind(
            ClientSicredRepositoryInterface::class,
            ClientSicredRepository::class
        );

        $this->app->bind(
            ConfiguracaoRepositoryInterface::class,
            ConfiguracaoRepository::class
        );

        $this->app->bind(
            ModeloSicredRepositoryInterface::class,
            ModeloSicredRepository::class
        );

        $this->app->bind(
            PessoaAssinaturaRepositoryInterface::class,
            PessoaAssinaturaRepository::class
        );

        $this->app->bind(
            PropostaRepositoryInterface::class,
            PropostaRepository::class
        );

        $this->app->bind(
            TipoLogradouroRepositoryInterface::class,
            TipoLogradouroRepository::class
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
