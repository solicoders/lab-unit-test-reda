<?php
namespace App\Repositories\Tests;

use App\Models\tests\Tests;
use App\Repositories\BaseRepository;

class TestsRepository extends BaseRepository
{

    public function __construct(Tests $tests)
    {
        parent::__construct($tests);
    }


    public function index()
    {
        return $this->model->index();
    }
}
