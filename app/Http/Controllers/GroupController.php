<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;
// model
use App\Models\test;
use App\Models\loginuser;
use App\Models\chat;
use App\Models\Community;
use App\File;
// hash
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
// auth
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use app\library\BaseClass;

class GroupController extends Controller
{
    public function community (Request  $request)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        if(isset($request->community_name))
        {
            if(!isset($request->image))
            {
                $message="＊画像が選択されていません。";
                return view('person.make-community',compact('name','fileName','message'));
            }
            // コミュニティ作成
            $community = new Community;
            $community->groupid = rand(); 
            $community->user_id= $myid; 
            $community->member = 1;
            $community->name = $request->community_name; 
            $file = $request->file('image');
            if($file->isValid()) {
		$fileNames = Storage::disk('s3')->putFile('uploads', $file, 'public');
		$fileNameurl = Storage::disk('s3')->url($fileNames);
            }
	    $target = Storage::disk('s3')->putFile('/uploads',$request->file('image'), 'public');
            $community->image = $fileNameurl;
            $community->category = $request->community_category; 
            $community->save(); 
        }
        // 自分のグループ
        $my_community =  \App\Models\Community::where('user_id', $myid)->distinct()->get();
        // 自分以外のグループ
        $communities =  \DB::table('community')
        ->select('groupid','name','image')
        ->where('user_id','<>', $myid)->distinct()->get();
        return view('person.community',compact('name','fileName','my_community','communities'));
       
    }

    // コミュニティ作成ページ
    public function make_community (Request  $request)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        return view('person.make-community',compact('name','fileName'));
    }


    // コミュニティメンバー
    public function communitydetail (Request  $request,$groupid)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        // グループ情報
        $communities =  \App\Models\Community::where('groupid', $groupid)->latest()->first();
        // 自分が入っているかどうか
        $mygroupjoin =  \App\Models\Community::where('groupid', $groupid)->where('user_id', $myid)->first();
        // メンバー
        $communitymember =  \DB::table('community')
        ->join('user','community.user_id','=','user.userid')
        ->where('community.groupid',$groupid)->get();

        return view('person.group_detail',compact('name','fileName','communities','communitymember','mygroupjoin'));
    }
    

    // グループ参加
    public function community_join (Request  $request)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        // 自分が入っているかどうか
        $mygroupjoin =  \App\Models\Community::where('groupid', $request->grouplike)->where('user_id', $myid)->first();
        $joingroup =  \App\Models\Community::where('groupid', $request->grouplike)->first();
        $member = $joingroup->member;
        // グループ情報
        if(isset($mygroupjoin))
        {
            \App\Models\Community::where('groupid', $request->grouplike)->where('user_id', $myid)->delete();
            \App\Models\chat::where('reply_id', $request->grouplike)->where('user_id', $myid)->delete();
        }
        else
        {
            // コミュニティ参加登録
            $community = new Community;
            $community->groupid = $joingroup->groupid; 
            $community->user_id= $myid; 
            $community->member = $member + 1;
            $community->name = $joingroup->name; 
            $file = $request->file('image');
            $community->image = $joingroup->image;
            $community->category = $joingroup->category; 
            $community->save(); 
            // チャットルーム作成
            $chat = new chat;
            $chat->chatroom = $joingroup->groupid;
            $chat->user_id = $myid;
            $chat->reply_id = $joingroup->groupid;
            $chat->save();
        }
        return response()->json($mygroupjoin);
    }

    // グループ参加状態
    public function joinstatus (Request  $request,$grouplike)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        // 自分が入っているかどうか
        $mygroup =  \App\Models\Community::where('groupid', $grouplike)->where('user_id', $myid)->first();
        return response()->json($mygroup);
    }

    // グループ検索
    public function search (Request  $request)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();

        $keyword = $request->community_search;

        $query = Community::query();

        if(!empty($keyword))
        {
            $query->where('name', 'LIKE', "%{$keyword}%")
            ->where('user_id','<>', $myid);
        }
        else
        {
            return redirect()->action('App\Http\Controllers\GroupController@community');
        }


        $lookgroup = $query->distinct()->get();
        return view('person.community_search',compact('name','fileName','lookgroup'));
    }
    
    // グループ退会
    public function leave (Request  $request,$groupid)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();

        \App\Models\Community::where('groupid', $groupid)->where('user_id', $myid)->delete();
        
        return redirect()->action('App\Http\Controllers\GroupController@community');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
