<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\LinkedIn;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LinkedInTest extends TestCase
{
    public function testIfFunctionGetAllCompaniesReturnsArray()
    {
        $service = new LinkedIn();
        $response = $service->getAccessToken();

        $this->assertTrue($response);
    }
}
