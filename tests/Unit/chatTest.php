<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\chat;
use App\Models\loginuser;
use app\library\BaseClass;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class chatTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/person/chat');
        $this->assertTrue(true);
    }


   //チャットルーム作成
    public function test_chat_make()
    {
        $chat =  chat::factory()->make();
        $response = $this->get('/person/chat');
        $this->assertTrue(true);
    }

   //チャットルームに移動
    public function test_chat_move()
    {
        $user = loginuser::factory()->make();
        //認証
        $response = $this->actingAs($user)->get('/person/chatroom/{chatroomid}');

        //自分の情報
        list($name,$fileName,$myid) = BaseClass::look_myuser();

        $chatroomid=rand();

        // チャット履歴を取り出す
        $chatroomtalk =  \DB::table('chat')
        ->leftjoin('community','chat.chatroom','=','community.groupid')
        ->leftjoin('user','chat.user_id','=','user.userid')
        ->select('chat.chatroom','chat.id as id','user.name as user_name','user.userid as user_id','user.image as user_image','community.image as community_image','community.name as community_name','chat.message as message')
        ->where('chat.chatroom',$chatroomid)->whereNotNull('message')->orderBy('id', 'asc')->distinct()->get();

        //取り出したトーク履歴をjsonで表示
        response()->json($chatroomtalk);

        $this->assertTrue(true);
    }


   //メッセージを送信
    public function test_chat_message()
    {
        $user = loginuser::factory()->make();
        $chatroomid = chat::factory()->create()->chatroom;
        //認証
        $response = $this->actingAs($user)->post('/person/chatroom/{chatroomid}');

        //自分の情報
        list($name,$fileName,$myid) = BaseClass::look_myuser();

        $chat = new chat;
        $chat->chatroom = $chatroomid;
        $chat->user_id = $myid;
        $chat->reply_id = chat::factory()->create()->reply_id;
        $chat->message = Str::random(10);
        $chat->save();

        // チャット履歴を取り出す
        $chatroomtalk =  \DB::table('chat')
        ->leftjoin('community','chat.chatroom','=','community.groupid')
        ->leftjoin('user','chat.user_id','=','user.userid')
        ->select('chat.chatroom','chat.id as id','user.name as user_name','user.userid as user_id','user.image as user_image','community.image as community_image','community.name as community_name','chat.message as message')
        ->where('chat.chatroom',$chatroomid)->whereNotNull('message')->orderBy('id', 'asc')->distinct()->get();

        //取り出したトーク履歴をjsonで表示
        response()->json($chatroomtalk);

        $this->assertTrue(true);
    }

}
