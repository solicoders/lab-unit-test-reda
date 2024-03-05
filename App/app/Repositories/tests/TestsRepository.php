<?php
namespace App\Repositories\Tests;

use App\Models\Tests;
use BaseRepository;

class TestsRepository extends BaseRepository
{

    public function __construct(Tests $tests)
    {
        parent::__construct($tests);
    }

}
