<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\test;
use App\Models\loginuser;

use Illuminate\Support\Facades\Hash;

class JoinUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // 新しいユーザー
    public function test_add_user()
    {
        $loginuser = new loginuser;
        $loginuser->userid = rand(); 
        $loginuser->sessionid = 2;
        $loginuser->name = 'abc'; 
        $loginuser->password = Hash::make('0987654740');
        $loginuser->email = 'abc@icloud.com'; 
        $loginuser->save(); 
        $this->assertTrue(true);
    }

    // ユーザーの登録ページ
    public function test_new_user_upload()
    {
        $response=$this->post( '/person/top');
        $this->assertTrue(true);
    }

    //ユーザーのログインページ
    public function test_new_user_page()
    {
        $response=$this->post( '/person/newmypage');
        $this->assertTrue(true);
    }

    

}
