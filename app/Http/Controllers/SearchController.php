<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;

// model
use App\Models\loginuser;
use App\Models\like;
use App\Models\chat;
// auth
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use app\library\BaseClass;

class SearchController extends Controller
{
    //search-topページ
    public function search (Request  $request)
    {
        list($name,$fileName) = BaseClass::header();
        return view('person.search',compact('name','fileName'));
    }

    // ユーザーをajaxで検索
    public function look ($userid)
    {
        $user =  \DB::table('user')->where('userid', $userid)->first();
        return response()->json($user);
    }

    // 相手ユーザーの表示
    public function userview ($userid)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        list($item,$yourname,$yourimage) = BaseClass::look_youruser($userid);
        // 自分のいいね
        $likes =  \App\Models\like::where('user_id' , $myid)->where('reply_id',$userid)->first();
        // 相手のいいね
        $yourlike = \App\Models\like::where('user_id' , $userid)->where('reply_id',$myid)->first();
        if(!empty($likes))
        {
            return view('person.user',compact('name','item','fileName','myid','userid','yourname','yourimage','likes','yourlike'));
        }
        else
        {
            return view('person.user',compact('name','item','fileName','myid','userid','yourname','yourimage'));
        }
    }

     // ajaxでお気に入り機能
     public function like ($userid)
     {
         list($name,$fileName,$myid) = BaseClass::look_myuser();
         $user =  \App\Models\like::where('user_id' , $myid)->where('reply_id',$userid)->first();
         $yourlike = \App\Models\like::where('user_id' , $userid)->where('reply_id',$myid)->first();
         //チャット削除
         if(isset($user)) 
         {
             \App\Models\like::where('user_id' , $myid)->where('reply_id',$userid)->delete();
             \App\Models\chat::where('user_id' , $myid)->where('reply_id',$userid)->delete();
             \App\Models\chat::where('user_id' , $userid)->where('reply_id',$myid)->delete();
         }
         else
         {
             $like = new like;
             $like->user_id = $myid;
             $like->reply_id = $userid;
             $like->save();
             if(isset($yourlike))
             {
                 // 互いにいいねでチャットルーム作成
                 // 自分用チャット
                 $chat = new chat;
                 $chat->chatroom = rand();
                 $chat->user_id = $myid;
                 $chat->reply_id = $userid;
                 $chat->save();
 
                 // 相手用チャット
                 $yourchat =  \App\Models\chat::where('user_id' , $myid)->where('reply_id',$userid)->first();
                 $yourchats = new chat;
                 $yourchats->chatroom = $yourchat->chatroom;
                 $yourchats->user_id = $userid;
                 $yourchats->reply_id = $myid;
                 $yourchats->save();
 
             }
         }
         return response()->json($user);
     }

      public function __construct()
        {
            $this->middleware('auth');
        }

}
