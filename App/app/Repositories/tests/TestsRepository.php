<?php
namespace App\Repositories\Tests;

use App\Models\Tests\Tests;
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
}
