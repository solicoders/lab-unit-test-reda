<?php
namespace App\Repositories\Tests;

use App\Models\tests\Tests;
use App\Repositories\BaseRepository;

class TestsRepository extends BaseRepository
{

    protected $model;
    public function __construct(Tests $tests)
    {
        parent::__construct($tests);
    }

    public function index(){
        return $this->model->paginate();
    }
    public function getAll(){
        return $this->model->all();
    }

    public function find($id){
        return $this->model->find($id);
    }
}
