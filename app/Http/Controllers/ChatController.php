<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;

// model
use App\Models\chat;
use App\Models\loginuser;
use App\Models\Community;

// auth
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use app\library\BaseClass;

// event
use App\Events\MessageCreated;

class ChatController extends Controller
{
     // チャットルーム一覧
     public function chat (Request  $request)
     {
         list($name,$fileName,$myid) = BaseClass::look_myuser();
         // チャット一覧
         $chatrooms =  \DB::table('chat')
         ->leftjoin('community','chat.chatroom','=','community.groupid')
         ->leftjoin('user','chat.reply_id','=','user.userid')
         ->select('chat.chatroom','user.name as user_name','user.image as user_image','community.image as community_image','community.name as community_name')
         ->where('chat.user_id',$myid)->whereNull('message')->distinct()->get();
         return view('person.chat',compact('name','fileName','chatrooms'));
     }
 
    //  コミュニティチャットルーム
     public function communitychat (Request  $request,$groupchat)
     {
         list($name,$fileName,$myid) = BaseClass::look_myuser();
         $chatroomid = $groupchat;
         // トーク履歴の呼び出し
         $group = \App\Models\chat::where('chatroom' , $chatroomid)->where('user_id',$myid)->first();
         if(!isset($group))
         {
             // 自分用
             $chat = new chat;
             $chat->chatroom = $chatroomid;
             $chat->user_id = $myid;
             $chat->reply_id = $chatroomid;
             $chat->save();
         }

         //所属メンバー名とグループ名を取得
         $groupinfo =  \DB::table('chat')
         ->leftjoin('community','chat.chatroom','=','community.groupid')
         ->leftjoin('user','chat.user_id','=','user.userid')
         ->select('user.name as user_name','user.image as user_image','community.image as community_image','community.name as community_name')
         ->where('chat.chatroom',$chatroomid)->first();
 
         return view('person.chatroom',compact('name','fileName','chatroomid','myid','groupinfo'));
     }
 

    //  個人チャット
     public function talkroom (Request  $request,$chatroomid)
     {
         list($name,$fileName,$myid) = BaseClass::look_myuser();
         // 相手の情報
         $groupinfo =  \DB::table('chat')
         ->leftjoin('community','chat.chatroom','=','community.groupid')
         ->leftjoin('user','chat.user_id','=','user.userid')
         ->select('user.name as user_name','user.image as user_image','community.image as community_image','community.name as community_name')
         ->where('chat.chatroom',$chatroomid)->first();
 
         if(!isset($groupinfo->community_name))
         {
             $yourinfo = \DB::table('chat')
             ->leftjoin('user','chat.reply_id','=','user.userid')
             ->select('user.name as name','user.image as image')
             ->where('chat.chatroom',$chatroomid)->where('chat.user_id',$myid)->first();
             return view('person.chatroom',compact('name','fileName','chatroomid','myid','yourinfo'));
         }
         else
         {
             return view('person.chatroom',compact('name','fileName','chatroomid','myid','groupinfo'));
         }
         
     }
 
     // メッセージ取得
     public function chatajax (Request  $request,$chatroomid)
     {
         list($name,$fileName,$myid) = BaseClass::look_myuser();
         // 相手の情報を取得
         $chatroomtalk =  \DB::table('chat')
         ->leftjoin('community','chat.chatroom','=','community.groupid')
         ->leftjoin('user','chat.user_id','=','user.userid')
         ->select('chat.chatroom','chat.id as id','user.name as user_name','user.userid as user_id','user.image as user_image','community.image as community_image','community.name as community_name','chat.message as message')
         ->where('chat.chatroom',$chatroomid)->whereNotNull('message')->orderBy('id', 'asc')->distinct()->get();
         return response()->json($chatroomtalk);
     }
 
 
     // メッセージ送信時
     public function chatcreate (Request  $request,$chatroomid)
     {
         list($name,$fileName,$myid) = BaseClass::look_myuser();
         // 相手の情報を取得
         $yourchat =  \DB::table('chat')
         ->leftjoin('community','chat.chatroom','=','community.groupid')
         ->leftjoin('user','chat.user_id','=','user.userid')
         ->select('chat.chatroom','user.userid as user_id','community.name as community_name','chat.user_id as chat_user','chat.reply_id as your_id')
         ->where('chat.chatroom',$chatroomid)->where('chat.user_id',$myid)->first();
 
         $message = $request->message;

         //グループチャットか個人チャットを区別
         if(!isset($yourchat->community_name))
         {
             $chat = new chat;
             $chat->chatroom = $chatroomid;
             $chat->user_id = $myid;
             $chat->reply_id = $yourchat->your_id;
             $chat->message = $message;
             $chat->save();
         }
         else
         {
             $chat = new chat;
             $chat->chatroom = $chatroomid;
             $chat->user_id = $myid;
             $chat->reply_id = $chatroomid;
             $chat->message = $message;
             $chat->save();
         }
 
         event(new MessageCreated($message));
         // トーク履歴の呼び出し
         $chatroomtalk =  \DB::table('chat')
         ->leftjoin('community','chat.chatroom','=','community.groupid')
         ->leftjoin('user','chat.user_id','=','user.userid')
         ->select('chat.chatroom','chat.id as id','user.name as user_name','user.userid as user_id','user.image as user_image','community.image as community_image','community.name as community_name','chat.message as message')
         ->where('chat.chatroom',$chatroomid)->whereNotNull('message')->orderBy('id', 'asc')->distinct()->get();
         return response()->json($chatroomtalk);
     }

     public function __construct()
    {
        $this->middleware('auth');
     }
}
