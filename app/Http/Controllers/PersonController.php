<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;
// model
use App\Models\Person;
use App\Models\Contact;
use App\Models\test;
use App\Models\loginuser;
use App\Models\like;
use App\Models\chat;
use App\Models\Community;
// hash
use Illuminate\Support\Facades\Hash;
// auth
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use app\library\BaseClass;

// event
use App\Events\MessageCreated;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->flush();
        return view('person/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $contact = new Contact;
    //     $contact->name = $request->name; 
    //     $contact->mail = $request->mail; 
    //     $contact->content = $request->content; 
    //     $contact->save(); 
    //     return view('/person/content_input');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $person = Person::findOrFail($id);
    //     return view('person/edit', compact('person'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

    // public function content(PostRequest  $result)
    // {
    //     $data1 = $result::all();
    //     return view('person.check',compact('data1'));
    // }
    

    // public function insert(PostRequest  $result)
    // {
    //     $insert=$result::all();
    //     if(Auth::check()) {
    //         // すでにログインしているユーザー
    //         if(isset($insert['userid']))
    //         {
    //             $youid = $insert['userid'];
    //             $youruser =  \DB::table('user')->where('userid', $youid)->first();
    //             $id = $youruser->sessionid;
    //         }
    //         else
    //         {
    //             $id = session()->get('id');
    //         }
    //         $user =  \DB::table('test')->where('id', $id)->first();
    //         switch(true) {
    //             case isset($insert['kind']):
    //                 $sum = $user->kind;
    //                 if(isset($insert['userid'])){
    //                     return view('person.kind_result',compact('sum','youid'));
    //                 }
    //                 else 
    //                 {
    //                     return view('person.kind_result',compact('sum'));
    //                 }
    //                 break;

    //             case isset($insert['serious']):
    //                 $sum = $user->conscientiousness;
    //                 if(isset($insert['userid'])){
    //                     return view('person.serious_result',compact('sum','youid'));
    //                 }
    //                 else 
    //                 {
    //                     return view('person.serious_result',compact('sum'));
    //                 }
    //                 break;

    //             case isset($insert['openness']):
    //                 $sum = $user->openness;
    //                 if(isset($insert['userid'])){
    //                     return view('person.openness_result',compact('sum','youid'));
    //                 }
    //                 else 
    //                 {
    //                     return view('person.openness_result',compact('sum'));
    //                 }
    //                 break;

    //             case isset($insert['extraversion']):
    //                 $sum = $user->extraversion;
    //                 if(isset($insert['userid'])){
    //                     return view('person.extraversion_result',compact('sum','youid'));
    //                 }
    //                 else 
    //                 {
    //                     return view('person.extraversion_result',compact('sum'));
    //                 }
    //                 break;

    //             case isset($insert['neuroticism']):
    //                 $sum = $user->neuroticism;
    //                 if(isset($insert['userid'])){
    //                     return view('person.neuroticism_result',compact('sum','youid'));
    //                 }
    //                 else 
    //                 {
    //                     return view('person.neuroticism_result',compact('sum'));
    //                 }
    //                 break;
    //         }
    //     }
    //     else
    //     {
    //         $high = $insert['q1'] + $insert['q2']+ $insert['q3']+ $insert['q4']+ $insert['q5']+ $insert['q6'];
    //         $row = $insert['q7'] + $insert['q8']+ $insert['q9']+ $insert['q10']+ $insert['q11']+ $insert['q12'];
    //         $sum = $high - $row;

    //         if(isset($insert['kind']))  {
    //             $test = new test;
    //             $test->kind = $sum; 
    //             $test->save(); 
                
    //             $user = DB::table('test')->latest()->first();
    //             $users= $user->id;
    //             session()->put(['id' => $users]);
    //             $id = session()->get('id');
    //             return view('person.kind_result',compact('sum'));
    //         }

    //         if(isset($insert['serious']))  {
    //             $id = session()->get('id');
    //             \DB::table('test')->where('id', $id) ->update([
    //                 'conscientiousness' => $sum
    //             ]);
    //             return view('person.serious_result',compact('sum'));
    //         }

    //         if(isset($insert['openness']))  {
    //             $id = session()->get('id');
    //             \DB::table('test')->where('id', $id) ->update([
    //                 'openness' => $sum
    //             ]);
    //             return view('person.openness_result',compact('sum'));
    //         }

    //         if(isset($insert['extraversion']))  {
    //             $id = session()->get('id');
    //             \DB::table('test')->where('id', $id) ->update([
    //                 'extraversion' => $sum
    //             ]);
    //             return view('person.extraversion_result',compact('sum'));
    //         }

    //         if(isset($insert['neuroticism']))  {
    //             $id = session()->get('id');
    //             \DB::table('test')->where('id', $id) ->update([
    //                 'neuroticism' => $sum
    //             ]);
    //             return view('person.neuroticism_result',compact('sum'));
    //         }
    //     }
    // }


    // public function result (PostRequest  $request)
    // {
    //     $user = DB::table('test')->latest()->first();
    //     $users= $user->id;
    //     session()->put(['id' => $users]);
    //     $id = session()->get('id');
    //     $item = test::find($id);
    //     return view('person.sum_result',compact('item'));
    // }


    // // newuser登録画面
    // public function start (Request  $request)
    // {
    //     // アップロード
    //     $id = session()->get('id');
    //     $item = test::find($id);
    //     $user =  \DB::table('user')->where('sessionid', $id)->first();
    //     $name = $user->name;
    //     $userid = $user->userid;
    //     $file =  $request->file('image');

    //     if($file->isValid()) {
    //         $fileName = time() . $file->getClientOriginalName();
    //         $target_path = public_path('uploads');
    //         $file->move($target_path, $fileName);
    //         \DB::table('user')->where('sessionid', $id) ->update([
    //             'image' => $fileName
    //         ]);
    //     }
    //     else {
    //         $fileName="rtrt";
    //     }
    //     return view('person.mypage', compact('item','name','fileName','userid'));
    // }

    // mypage
    public function  mypage(Request $request)
    {
        $id = session()->get('id');
        $item = test::find($id);
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        $userid = $myid;
        return view('person.mypage',compact('name','item','userid','fileName'));
    }

    // public function search (Request  $request)
    // {
    //     list($name,$fileName) = BaseClass::header();
    //     return view('person.search',compact('name','fileName'));
    // }

    // // ajax
    // public function look ($userid)
    // {
    //     $user =  \DB::table('user')->where('userid', $userid)->first();
    //     return response()->json($user);
    // }

    // // 相手ユーザーの表示
    // public function userview ($userid)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     list($item,$yourname,$yourimage) = BaseClass::look_youruser($userid);
    //     // 自分のいいね
    //     $likes =  \App\Models\like::where('user_id' , $myid)->where('reply_id',$userid)->first();
    //     // 相手のいいね
    //     $yourlike = \App\Models\like::where('user_id' , $userid)->where('reply_id',$myid)->first();
    //     if(!empty($likes))
    //     {
    //         return view('person.user',compact('name','item','fileName','myid','userid','yourname','yourimage','likes','yourlike'));
    //     }
    //     else
    //     {
    //         return view('person.user',compact('name','item','fileName','myid','userid','yourname','yourimage'));
    //     }
    // }


    // // like機能
    // public function like ($userid)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     $user =  \App\Models\like::where('user_id' , $myid)->where('reply_id',$userid)->first();
    //     $yourlike = \App\Models\like::where('user_id' , $userid)->where('reply_id',$myid)->first();
    //     if(isset($user)) 
    //     {
    //         \App\Models\like::where('user_id' , $myid)->where('reply_id',$userid)->delete();
    //         \App\Models\chat::where('user_id' , $myid)->where('reply_id',$userid)->delete();
    //         \App\Models\chat::where('user_id' , $userid)->where('reply_id',$myid)->delete();
    //     }
    //     else
    //     {
    //         $like = new like;
    //         $like->user_id = $myid;
    //         $like->reply_id = $userid;
    //         $like->save();
    //         if(isset($yourlike))
    //         {
    //             // 互いにいいねでチャットルーム作成
    //             // 自分用
    //             $chat = new chat;
    //             $chat->chatroom = rand();
    //             $chat->user_id = $myid;
    //             $chat->reply_id = $userid;
    //             $chat->save();

    //             // 相手用
    //             $yourchat =  \App\Models\chat::where('user_id' , $myid)->where('reply_id',$userid)->first();
    //             $yourchats = new chat;
    //             $yourchats->chatroom = $yourchat->chatroom;
    //             $yourchats->user_id = $userid;
    //             $yourchats->reply_id = $myid;
    //             $yourchats->save();

    //         }
    //     }
    //     return response()->json($user);
    // }

    // // チャットルーム一覧
    // public function chat (Request  $request)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     // チャット一覧
    //     $chatrooms =  \DB::table('chat')
    //     ->leftjoin('community','chat.chatroom','=','community.groupid')
    //     ->leftjoin('user','chat.reply_id','=','user.userid')
    //     ->select('chat.chatroom','user.name as user_name','user.image as user_image','community.image as community_image','community.name as community_name')
    //     ->where('chat.user_id',$myid)->whereNull('message')->distinct()->get();
    //     return view('person.chat',compact('name','fileName','chatrooms'));
    // }

    // public function communitychat (Request  $request,$groupchat)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     $chatroomid = $groupchat;
    //     // トーク履歴の呼び出し
    //     $group = \App\Models\chat::where('chatroom' , $chatroomid)->where('user_id',$myid)->first();
    //     if(!isset($group))
    //     {
    //         // 自分用
    //         $chat = new chat;
    //         $chat->chatroom = $chatroomid;
    //         $chat->user_id = $myid;
    //         $chat->reply_id = $chatroomid;
    //         $chat->save();
    //     }

    //     $groupinfo =  \DB::table('chat')
    //     ->leftjoin('community','chat.chatroom','=','community.groupid')
    //     ->leftjoin('user','chat.user_id','=','user.userid')
    //     ->select('user.name as user_name','user.image as user_image','community.image as community_image','community.name as community_name')
    //     ->where('chat.chatroom',$chatroomid)->first();

    //     return view('person.chatroom',compact('name','fileName','chatroomid','myid','groupinfo'));
    // }

    // public function talkroom (Request  $request,$chatroomid)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     // 相手の情報
    //     $groupinfo =  \DB::table('chat')
    //     ->leftjoin('community','chat.chatroom','=','community.groupid')
    //     ->leftjoin('user','chat.user_id','=','user.userid')
    //     ->select('user.name as user_name','user.image as user_image','community.image as community_image','community.name as community_name')
    //     ->where('chat.chatroom',$chatroomid)->first();

    //     if(!isset($groupinfo->community_name))
    //     {
    //         $yourinfo = \DB::table('chat')
    //         ->leftjoin('user','chat.reply_id','=','user.userid')
    //         ->select('user.name as name','user.image as image')
    //         ->where('chat.chatroom',$chatroomid)->where('chat.user_id',$myid)->first();
    //         return view('person.chatroom',compact('name','fileName','chatroomid','myid','yourinfo'));
    //     }
    //     else
    //     {
    //         return view('person.chatroom',compact('name','fileName','chatroomid','myid','groupinfo'));
    //     }
        
    // }

    // // メッセージ取得
    // public function chatajax (Request  $request,$chatroomid)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     // 相手の情報を取得
    //     $chatroomtalk =  \DB::table('chat')
    //     ->leftjoin('community','chat.chatroom','=','community.groupid')
    //     ->leftjoin('user','chat.user_id','=','user.userid')
    //     ->select('chat.chatroom','chat.id as id','user.name as user_name','user.userid as user_id','user.image as user_image','community.image as community_image','community.name as community_name','chat.message as message')
    //     ->where('chat.chatroom',$chatroomid)->whereNotNull('message')->orderBy('id', 'asc')->distinct()->get();
    //     return response()->json($chatroomtalk);
    // }


    // // メッセージ送信時
    // public function chatcreate (Request  $request,$chatroomid)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     // 相手の情報を取得
    //     $yourchat =  \DB::table('chat')
    //     ->leftjoin('community','chat.chatroom','=','community.groupid')
    //     ->leftjoin('user','chat.user_id','=','user.userid')
    //     ->select('chat.chatroom','user.userid as user_id','community.name as community_name','chat.user_id as chat_user','chat.reply_id as your_id')
    //     ->where('chat.chatroom',$chatroomid)->where('chat.user_id',$myid)->first();

    //     $message = $request->message;

    //     if(!isset($yourchat->community_name))
    //     {
    //         $chat = new chat;
    //         $chat->chatroom = $chatroomid;
    //         $chat->user_id = $myid;
    //         $chat->reply_id = $yourchat->your_id;
    //         $chat->message = $message;
    //         $chat->save();
    //     }
    //     else
    //     {
    //         $chat = new chat;
    //         $chat->chatroom = $chatroomid;
    //         $chat->user_id = $myid;
    //         $chat->reply_id = $chatroomid;
    //         $chat->message = $message;
    //         $chat->save();
    //     }

    //     event(new MessageCreated($message));
    //     // トーク履歴の呼び出し
    //     $chatroomtalk =  \DB::table('chat')
    //     ->leftjoin('community','chat.chatroom','=','community.groupid')
    //     ->leftjoin('user','chat.user_id','=','user.userid')
    //     ->select('chat.chatroom','chat.id as id','user.name as user_name','user.userid as user_id','user.image as user_image','community.image as community_image','community.name as community_name','chat.message as message')
    //     ->where('chat.chatroom',$chatroomid)->whereNotNull('message')->orderBy('id', 'asc')->distinct()->get();
    //     return response()->json($chatroomtalk);
    // }


    // public function community (Request  $request)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     if(isset($request->community_name))
    //     {
    //         // コミュニティ作成
    //         $community = new Community;
    //         $community->groupid = rand(); 
    //         $community->user_id= $myid; 
    //         $community->member = 1;
    //         $community->name = $request->community_name; 
    //         $file = $request->file('image');
    //         if($file->isValid()) {
    //             $fileNames = time() . $file->getClientOriginalName();
    //             $target_path = public_path('uploads');
    //             $file->move($target_path, $fileNames);
    //         }
    //         $community->image = $fileNames;
    //         $community->category = $request->community_category; 
    //         $community->save(); 
    //     }
    //     // 自分のグループ
    //     $my_community =  \App\Models\Community::where('user_id', $myid)->distinct()->get();
    //     // 自分以外のグループ
    //     $communities =  \DB::table('community')
    //     ->select('groupid','name','image')
    //     ->where('user_id','<>', $myid)->distinct()->get();
    //     return view('person.community',compact('name','fileName','my_community','communities'));
       
    // }

    // // コミュニティ作成ページ
    // public function make_community (Request  $request)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     return view('person.make-community',compact('name','fileName'));
    // }


    // // コミュニティメンバー
    // public function communitydetail (Request  $request,$groupid)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     // グループ情報
    //     $communities =  \App\Models\Community::where('groupid', $groupid)->first();
    //     // 自分が入っているかどうか
    //     $mygroupjoin =  \App\Models\Community::where('groupid', $groupid)->where('user_id', $myid)->first();
    //     // メンバー
    //     $communitymember =  \DB::table('community')
    //     ->join('user','community.user_id','=','user.userid')
    //     ->where('community.groupid',$groupid)->get();

    //     return view('person.group_detail',compact('name','fileName','communities','communitymember','mygroupjoin'));
    // }
    

    // // グループ参加
    // public function community_join (Request  $request)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     // 自分が入っているかどうか
    //     $mygroupjoin =  \App\Models\Community::where('groupid', $request->grouplike)->where('user_id', $myid)->first();
    //     $joingroup =  \App\Models\Community::where('groupid', $request->grouplike)->first();
    //     // グループ情報
    //     if(isset($mygroupjoin))
    //     {
    //         \App\Models\Community::where('groupid', $request->grouplike)->where('user_id', $myid)->delete();
    //         \App\Models\chat::where('reply_id', $request->grouplike)->where('user_id', $myid)->delete();
    //     }
    //     else
    //     {
    //         // コミュニティ参加登録
    //         $community = new Community;
    //         $community->groupid = $joingroup->groupid; 
    //         $community->user_id= $myid; 
    //         $community->member += 1;
    //         $community->name = $joingroup->name; 
    //         $file = $request->file('image');
    //         $community->image = $joingroup->image;
    //         $community->category = $joingroup->category; 
    //         $community->save(); 
    //         // チャットルーム作成
    //         $chat = new chat;
    //         $chat->chatroom = $joingroup->groupid;
    //         $chat->user_id = $myid;
    //         $chat->reply_id = $joingroup->groupid;
    //         $chat->save();
    //     }
    //     return response()->json($mygroupjoin);
    // }

    // // グループ参加状態
    // public function joinstatus (Request  $request,$grouplike)
    // {
    //     list($name,$fileName,$myid) = BaseClass::look_myuser();
    //     // 自分が入っているかどうか
    //     $mygroup =  \App\Models\Community::where('groupid', $grouplike)->where('user_id', $myid)->first();
    //     return response()->json($mygroup);
    // }

    //  public function __construct()
    // {
    //      $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function loginpage()
    // {
    //     return view('home');
    // }
}
