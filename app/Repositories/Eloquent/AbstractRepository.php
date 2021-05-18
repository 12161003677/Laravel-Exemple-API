<?php

namespace App\Repositories\Eloquent;

use App\Exceptions\DbException;
use App\Exceptions\FailedAction;
use App\Repositories\Contracts\AbstractRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;

abstract class AbstractRepository implements AbstractRepositoryInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function fill($data)
    {
        return $this->model->fill($data);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        // return $this->model->findOrFail($id);
        $entity = $this->model->find($id);
        if($entity)
            return $entity;

        throw new FailedAction('Registro não encontrado em ' . $this->model->getTable() . '.', 404);
    }

    public function where(string $column, $value)
    {
        return $this->model->where($column, $value);
    }

    public function whereIn(string $column, $arrayValues)
    {
        return $this->model->whereIn($column, $arrayValues);
    }

    public function orWhere(string $column, string $operador, $value)
    {
        return $this->model->orWhere($column, $value);
    }


    public function firstWhere(string $column, $value)
    {
        return $this->model->firstWhere($column, $value);
    }

    public function create($data)
    {
        try {
            $entity = $this->model->create($data);
            return $entity;
        } catch(Exception $e) {
            throw new DbException('Erro ao salvar o registro em ' . $this->model->getTable() . '.', $e, $this->model);
        }
    }

    public function createMany($attributesAllRegisters)
    {
        $arrayCreated = [];
        foreach ($attributesAllRegisters as $attributes) {
            array_push($arrayCreated, $this->create($attributes));
        }
        return $arrayCreated;
    }

    public function update($data, $id)
    {
        $entity = $this->findOrFail($id);
        $entity->update($data);

        return $entity;
    }

    public function delete($id)
    {
        $entity = $this->findOrFail($id);
        return $entity->delete($id);
    }
}
