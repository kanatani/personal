<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\test;
use App\Models\loginuser;

use Faker\Generator as Faker;

use Illuminate\Support\Facades\Hash;

class LoginuserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_login_page()
    {
        $response=$this->get( '/person/loguin');
        $this->assertTrue(true);
        $this->assertGuest();
    }

    //ログイン
     //mis
    public function test_login()
    {
        $this->assertGuest();
        //テスト用ユーザーを呼び出す
        $user = loginuser::factory()->make();
        //認証
        $response = $this->actingAs($user)->get('/person/mypage',);
        //認証確認
        $this->assertAuthenticated();
        $this->assertTrue(true);
    }

    //ログアウト
     //mis
    public function test_logout()
    {
        $response = $this->test_login();
        $this->assertAuthenticated();
        $response = $this->get('person/logout');
        //認証確認
        $this->assertGuest();
        $this->assertTrue(true);
    }
}
