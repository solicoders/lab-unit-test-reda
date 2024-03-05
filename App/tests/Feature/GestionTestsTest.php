<?php

namespace Tests\Feature;

use App\Models\Tests\Tests;
use App\Repositories\Tests\TestsRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GestionTestsTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    public function test_data_is_returned(): void
    {
        $TestsRepository = new TestsRepository(new Tests);

        $response = $TestsRepository->index();
        $this->assertNotNull($response);
    }

    public function test_data_is_greater_than_0(): void
    {
        $TestsRepository = new TestsRepository(new Tests);

        $response = count($TestsRepository->index());
        $this->assertGreaterThan(0,$response, 'Message: '.$response);
    }


}
