<?php

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{

    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        return $this->model->all()->first();
    }
}
