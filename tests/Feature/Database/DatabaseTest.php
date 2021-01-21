<?php

namespace Tests\Feature\Database;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\test;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $test = new test();
        $test->openness = 2;
        $test->extraversion = 2;
        $test->conscientiousness = 2;
        $test->kind = 2;
        $test->neuroticism = 2;
         $test->save();
    }
}
