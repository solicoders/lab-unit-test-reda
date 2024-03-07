<?php

namespace App\Http\Controllers;

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
        $this->TestsRepository->index();
        return view('index', compact('tests'));
    }
}
