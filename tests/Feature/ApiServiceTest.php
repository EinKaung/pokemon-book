<?php

namespace Tests\Feature;

use App\Services\ApiService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiServiceTest extends TestCase
{

    public function test_api_request_is_successful(): void
    {
        //ApiServiceのインスタンスを作成
        $apiService = new ApiService();

        $result = $apiService->fetchData(1);

        // 期待される結果をアサート
        $this->assertNotNull($result);
        $this->assertArrayHasKey('game_indices', $result);
    }
}
