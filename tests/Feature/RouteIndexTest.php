<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\test;

class RouteIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/person');

        $response->assertStatus(200);
    }

    public function test_page()
    {
        $response = $this->get('person/test');

        $response->assertStatus(200);
    }

    public function test_kind_page()
    {
        $response = $this->get('/person/kind');

        $response->assertStatus(200);
    }

    public function test_kind_result_page()
    {

            if(isset($insert['kind']))  {
                $test = new test;
                $test->kind = 4; 
                $test->save(); 
                $user = DB::table('test')->latest()->first();
                $users= 5;
                session()->put(['id' => $users]);
                $response = $this->get('/person/serious');
                $response->assertStatus(200);
            }
    }

    public function test_open_page()
    {
        $response = $this->get('person/openness');

        $response->assertStatus(200);
    }

    public function test_serious_page()
    {
        $response = $this->get('person/serious');

        $response->assertStatus(200);
    }

    public function test_neuroticism_page()
    {
        $response = $this->get('/person/neuroticism');

        $response->assertStatus(200);
    }

}
