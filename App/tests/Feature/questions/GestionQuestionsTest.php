<?php

namespace Tests\Feature;

use App\Models\Questions\Questions;
use App\Repositories\Questions\QuestionsRepository;
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
        $QuestionsRepository = new QuestionsRepository(new Questions);

        $data = [
            'question' => 'What is Laravel?',
            'reponse' => 'Laravel is a framework',
            'test_id' => 1
        ];
        $QuestionsRepository->store($data);
        $this->assertDatabaseHas('questions', ['reponse' => 'Laravel is a framework']);
    }

    public function test_data_is_returned(): void
    {
        $QuestionsRepository = new QuestionsRepository(new Questions);

        $response = $QuestionsRepository->index();
        $this->assertNotNull($response);
    }


    public function test_data_is_updated(): void
    {
        $QuestionsRepository = new QuestionsRepository(new Questions);
        $data = [
            'question' => 'What is Laravel?',
            'reponse' => 'Laravel is a php framework',
            'test_id' => 1
        ];
        $response = $QuestionsRepository->update($data, 1);
        $this->assertNotNull($response);
    }

    public function test_returned_data_is_greater_than_0(): void
    {
        $QuestionsRepository = new QuestionsRepository(new Questions);

        $response = count($QuestionsRepository->paginatedData(2));

        $this->assertGreaterThan(0, $response, 'Message: ' . $response);
    }


    public function test_data_is_deleted()
    {
        $QuestionsRepository = new QuestionsRepository(new Questions);
        $data = $QuestionsRepository->find(1);
        if ($data) {
            $QuestionsRepository->destroy(1);
        }
        $this->assertDatabaseMissing('questions', ['id' => 1]);
    }
}
