<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\chat;

class chatroomtext extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $chat = new chat;
        $chat->chatroom = 556652979;
        $chat->user_id = 957034837;
        $chat->reply_id = 2034178332;
        $chat->message= 'unun';
        $chat->save();
        $this->assertTrue(true);
    }
    
    public function test_neuroticism_page()
    {
        $response = $this->get('/person/neuroticism');

        $response->assertStatus(200);
    }
}
