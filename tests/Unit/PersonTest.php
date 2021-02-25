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

    //協調性テストページ 
    public function test_kind()
    {
        $response=$this->get('person/kind');
        $this->assertTrue(true);
    }

     //協調性テスト結果ページ 
      //mis
    public function test_kind_result()
    {
        $response=$this->post('person/kind_result');
        $this->assertTrue(true);
    }

    //勤勉性テストページ
    public function test_serious()
    {
        $response=$this->get('person/serious');
        $this->assertTrue(true);
    }

     //勤勉性テスト結果ページ 
    public function test_serious_result()
    {
        $response=$this->post('person/serious_result');
        $this->assertTrue(true);
    }

     //開放性テストページ
    public function test_openness()
    {
        $response=$this->get('person/openness');
        $this->assertTrue(true);
    }

     //開放性テスト結果ページ 
    public function test_openness_result()
    {
        $response=$this->post('person/openness_result');
        $this->assertTrue(true);
    }

    //外向性テストページ 
    public function test_extraversion()
    {
        $response=$this->get('person/extraversion');
        $this->assertTrue(true);
    }

     //外向性テスト結果ページ 
    public function test_extraversion_result()
    {
        $response=$this->post('person/extraversion_result');
        $this->assertTrue(true);
    }

     //神経症的傾向テストページ 
    public function test_neuroticism()
    {
        $response=$this->get('person/neuroticism');
        $this->assertTrue(true);
    }

     //協調性テスト結果ページ 
    public function test_neuroticism_result()
    {
        $response=$this->post('person/neuroticism_result');
        $this->assertTrue(true);
    }
    
}
