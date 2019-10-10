<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\Assert;
use Tests\TestCase;

class AnswerTest extends TestCase
{
    public function test_if_questions_are_seeninview()
    {

        $response = $this->get('/questions');
        $response->assertSeeText('laraveltest1');
        $response->assertSeeText('question 1');
    }
}
