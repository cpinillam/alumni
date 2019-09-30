<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Github;
use App\Service;
use Mockery;

class GithubTest extends TestCase
{
    public function testIfGithubServiceReturnsArray()
    {
        $username = 'colmanfranco';
        $client = new Github('service');
        $array = $client->getUserRepositories($username);
        $this->assertIsObject($array);
    }

    public function testIfGithubServiceHasTheInformationIWant()
    {
        $service = Mockery::mock('service');
        $service->shouldReceive('full_name => colmanfranco/kataCRUD')->once();

        $github = new Github($service);
        $username = 'colmanfranco';
        $repo = $github->getUserRepositories($username);

        $this->assertArraySubset(['items' => ['0', '1']], ['items' => ['0']]);
    }

}
