<?php

namespace Tests\Feature;

use App\Models\Questions\Questions;
use App\Repositories\Questions\QuestionsRepository;
use App\Repositories\Tests\TestsRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GestionQuestionsTest extends TestCase
{
    /**
     * A basic feature test example.
     */


    public function test_data_is_stored(): void
    {
        $TestsRepository = new QuestionsRepository(new Questions);

        $data = [
            'question' => 'What is Laravel?',
            'reponse' => 'Laravel is a framework',
            'test_id' => 1
        ];
        $response = $TestsRepository->store($data);
        $this->assertNotNull($response);
    }

    public function test_data_is_returned(): void
    {
        $TestsRepository = new QuestionsRepository(new Questions);

        $response = $TestsRepository->index();
        $this->assertNotNull($response);
    }

    public function test_data_is_greater_than_0(): void
    {
        $TestsRepository = new QuestionsRepository(new Questions);

        $response = count($TestsRepository->index());

        $this->assertGreaterThan(0, $response, 'Message: ' . $response);
    }
}
