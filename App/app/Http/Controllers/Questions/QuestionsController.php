<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Http\Requests\questions\ValidateQuestionData;
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
    public function store(ValidateQuestionData $validateQuestionData)
    {
        $ValidatedData = $validateQuestionData->validated();
        $AddQuestion = $this->QuestionsRepository->store($ValidatedData);

        $questions = $this->QuestionsRepository->paginatedData(5);
        return view('questions.index', compact('questions'));
    }

    public function edit($id)
    {
        $question = $this->QuestionsRepository->find($id);
        return view('questions.edit', compact('question'));
    }
}
