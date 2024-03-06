<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Repositories\Questions\QuestionsRepository;
use App\Repositories\Tests\TestsRepository;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    protected $QuestionsRepository;
    protected $TestsRepository;
    public function __construct(QuestionsRepository $QuestionsRepository, TestsRepository $TestsRepository)
    {
        $this->QuestionsRepository = $QuestionsRepository;
        $this->TestsRepository = $TestsRepository;
    }
    public function index()
    {
        $questions = $this->QuestionsRepository->paginatedData(5);
        return view('questions.index', compact('questions'));
    }

    public function show($id)
    {
        $question = $this->QuestionsRepository->find($id);
        return view('questions.show', compact('question'));
    }

    public function create()
    {
        $tests = $this->TestsRepository->getAll();
        return view('questions.create', compact('tests'));
    }
    public function store(Request $request)
    {
        dd($request->all());
        $question = $this->QuestionsRepository->store($request->all());
        return view('questions.index', compact('question'));
    }

    
}
