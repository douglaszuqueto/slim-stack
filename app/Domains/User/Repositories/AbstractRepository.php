<?php

namespace App\Domains\User\Repositories;

use ActiveRecord\Model;
use App\Domains\User\Contracts\ActiveRecordRepository;

abstract class AbstractRepository implements ActiveRecordRepository
{
    /**
     * @var Model
     */
    private $model;

    /**
     * AbstractRepository constructor.
     */
    public function __construct()
    {
        $this->makeModel();
    }

    abstract public function model();

    public function makeModel()
    {
        $model = $this->model();

//        if ($model instanceof Model) {
//            throw new Exception('Fatal Error');
//        }
        return $this->model = new $model;
    }

    /**
     * Functions
     */

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {

    }

    public function delete($id)
    {
        $model = $this->model->find($id);
        return $model->delete();
    }
}