<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\like;
use App\Models\loginuser;
use app\library\BaseClass;

class user_chat_join extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        // 結合
        $chatrooms =  \DB::table('chat')
        ->join('user','chat.reply_id','=','user.userid')
        ->where('chat.user_id',2034178332)->get();
        $this->assertTrue(true);
    }
}
