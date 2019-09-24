<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Controllers\KataController;

class KataControllerTest extends TestCase
{
    public function testIfKataViewReturnsCode200()
    {
        $kata = new KataController();
        $response = $this->get('/kata');
        $response->assertStatus(200);
    }
}
