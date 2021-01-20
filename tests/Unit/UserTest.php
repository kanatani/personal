<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\like;
class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $like = new like;
        $like->user_id = 123;
        $like->reply_id = 321;
        $like->save();
        $this->assertTrue(true);
    }
}
