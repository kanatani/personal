<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\chat;

class chatTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $chat = new chat;
        $chat->chatroom = rand();
        $chat->user_id = 123;
        $chat->reply_id = 321;
        $chat->save();
        $this->assertTrue(true);
    }
}
