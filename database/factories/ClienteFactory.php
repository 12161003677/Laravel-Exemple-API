<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientePjFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [            
            'cnpj' => $this->faker->cnpj(false),
            'inscricao_estadual' => $this->rg(false),
            'nome_fantasia' => $this->faker->company,
            'razao_social' => $this->faker->company,
            'ramo_atividade' => $this->bs,
            'celular' => preg_replace('/[^0-9]+/', '', $this->faker->cellphone),
            'email' => $this->faker->email,
            'senha' => $this->faker->password(6, 8),
            'cep' => $this->faker->postcode,
            'uf' => $this->faker->stateAbbr,
            'cidade' => $this->faker->city,
            'bairro' => $this->faker->cityPrefix,
            'logradouro' => $this->faker->streetName,
            'numero' => $this->faker->buildingNumber,
            'complemento' => $this->faker->streetSuffix,
            'id_tipo_logradouro' => 1,
            'id_forma_inclusao' => $this->id_forma_inclusao_capital_de_giro,
            'createdAt' => date('Y-m-d H:i:s'),
            'updatedAt' => date('Y-m-d H:i:s')
        ];
    }
}
