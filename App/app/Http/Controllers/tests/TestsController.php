<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use App\Models\Tests;
use App\Repositories\Tests\TestsRepository;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    protected $TestsRepository;
    public function __construct(TestsRepository $TestsRepository){
        $this->TestsRepository = $TestsRepository; 
    }
    public function index(){
        $tests = $this->TestsRepository->index(1);
    }
}
