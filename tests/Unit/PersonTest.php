<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\test;

class PersonTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $test = new test;
        $test->openness = 2;
        $test->kind = 2;
        $test->neuroticism = 2;
        $test->extraversion = 2;
        $test->conscientiousness = 2;
        $test->save();
        $this->assertTrue(true);
    }
}
