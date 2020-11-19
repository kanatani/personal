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
// hash
use Illuminate\Support\Facades\Hash;
// auth
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use app\library\BaseClass;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name; 
        $contact->mail = $request->mail; 
        $contact->content = $request->content; 
        $contact->save(); 
        return view('/person/content_input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::findOrFail($id);
        return view('person/edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function content(PostRequest  $result)
    {
        $data1 = $result::all();
        return view('person.check',compact('data1'));
    }
    

    public function insert(PostRequest  $result)
    {
        $insert=$result::all();
        if(Auth::check()) {
            if(isset($insert['userid']))
            {
                $youid = $insert['userid'];
                $youruser =  \DB::table('user')->where('userid', $youid)->first();
                $id = $youruser->sessionid;
            }
            else
            {
                $id = session()->get('id');
            }
            $user =  \DB::table('test')->where('id', $id)->first();
            switch(true) {
                case isset($insert['kind']):
                    $sum = $user->kind;
                    if(isset($insert['userid'])){
                        return view('person.kind_result',compact('sum','youid'));
                    }
                    else 
                    {
                        return view('person.kind_result',compact('sum'));
                    }
                    break;

                case isset($insert['serious']):
                    $sum = $user->conscientiousness;
                    if(isset($insert['userid'])){
                        return view('person.serious_result',compact('sum','youid'));
                    }
                    else 
                    {
                        return view('person.serious_result',compact('sum'));
                    }
                    break;

                case isset($insert['openness']):
                    $sum = $user->openness;
                    if(isset($insert['userid'])){
                        return view('person.openness_result',compact('sum','youid'));
                    }
                    else 
                    {
                        return view('person.openness_result',compact('sum'));
                    }
                    break;

                case isset($insert['extraversion']):
                    $sum = $user->extraversion;
                    if(isset($insert['userid'])){
                        return view('person.extraversion_result',compact('sum','youid'));
                    }
                    else 
                    {
                        return view('person.extraversion_result',compact('sum'));
                    }
                    break;

                case isset($insert['neuroticism']):
                    $sum = $user->neuroticism;
                    if(isset($insert['userid'])){
                        return view('person.neuroticism_result',compact('sum','youid'));
                    }
                    else 
                    {
                        return view('person.neuroticism_result',compact('sum'));
                    }
                    break;
            }
        }
        else
        {
            $high = $insert['q1'] + $insert['q2']+ $insert['q3']+ $insert['q4']+ $insert['q5']+ $insert['q6'];
            $row = $insert['q7'] + $insert['q8']+ $insert['q9']+ $insert['q10']+ $insert['q11']+ $insert['q12'];
            $sum = $high - $row;

            if(isset($insert['kind']))  {
                $test = new test;
                $test->kind = $sum; 
                $test->save(); 
                
                $user = DB::table('test')->latest()->first();
                $users= $user->id;
                session()->put(['id' => $users]);
                $id = session()->get('id');
                return view('person.kind_result',compact('sum'));
            }

            if(isset($insert['serious']))  {
                $id = session()->get('id');
                \DB::table('test')->where('id', $id) ->update([
                    'conscientiousness' => $sum
                ]);
                return view('person.serious_result',compact('sum'));
            }

            if(isset($insert['openness']))  {
                $id = session()->get('id');
                \DB::table('test')->where('id', $id) ->update([
                    'openness' => $sum
                ]);
                return view('person.openness_result',compact('sum'));
            }

            if(isset($insert['extraversion']))  {
                $id = session()->get('id');
                \DB::table('test')->where('id', $id) ->update([
                    'extraversion' => $sum
                ]);
                return view('person.extraversion_result',compact('sum'));
            }

            if(isset($insert['neuroticism']))  {
                $id = session()->get('id');
                \DB::table('test')->where('id', $id) ->update([
                    'neuroticism' => $sum
                ]);
                return view('person.neuroticism_result',compact('sum'));
            }
        }
    }


    public function result (PostRequest  $request)
    {
        $user = DB::table('test')->latest()->first();
        $users= $user->id;
        session()->put(['id' => $users]);
        $id = session()->get('id');
        $item = test::find($id);
        return view('person.sum_result',compact('item'));
    }

    // サインアップ
    public function signup (Request  $request)
    {
        $id = session()->get('id');
        $loginuser = new loginuser;
        $loginuser->userid = rand(); 
        $loginuser->sessionid = $id;
        $loginuser->name = $request->login_name; 
        $loginuser->password = Hash::make($request->login_pass);
        $loginuser->email = $request->login_mail; 
        $loginuser->save(); 
        $user =  loginuser::find($id);
        Auth::loginUsingId($id);
        return view('person.top');
    }

    // newuser登録画面
    public function start (Request  $request)
    {
        // アップロード
        $id = session()->get('id');
        $item = test::find($id);
        $user =  \DB::table('user')->where('sessionid', $id)->first();
        $name = $user->name;
        $userid = $user->userid;
        $file =  $request->file('image');

        if($file->isValid()) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads');
            $file->move($target_path, $fileName);
            \DB::table('user')->where('sessionid', $id) ->update([
                'image' => $fileName
            ]);
        }
        else {
            $fileName="rtrt";
        }
        return view('person.mypage', compact('item','name','fileName','userid'));
    }

    // ログイン
    public function  login(Request $request)
    {
        // ログインチェック
        if(Auth::check()) {
            $id = session()->get('id');
            $user =  \DB::table('user')->where('sessionid', $id)->first();
            $name= $user->name;
            $fileName= $user->image;
            $userid = $user->userid;
            $item = test::find($id);
            return view('person.mypage',compact('name','item','userid','fileName'));
        }
        else
        {
            $email = $request->login_mail;  
            $password = $request->login_pass;
            // アカウントチェック
            if(Auth::attempt(['password' => $password, 'email' => $email])) {
                if(session()->exists('id')) {
                    $user =  \DB::table('user')->where('email', $email)->first();
                    $id = session()->get('id');
                }
                else
                {
                    $user =  \DB::table('user')->where('email', $email)->first();
                    $users = session()->put('id', $user->sessionid);
                    $id = session()->get('id');
                }
                $fileName= $user->image;
                $item = test::find($id);
                $name= $user->name;
                $userid = $user->userid;
                return view('person.mypage',compact('name','item','id','fileName','userid'));
            }
            else 
            {
                return view('person.loguin');
            }
        }
    }

    // ログアウト
    public function  logout(Request $request)
    {
        Auth::logout();
        session()->flush();
        return view('person');
    }

    public function search (Request  $request)
    {
        list($name,$fileName) = BaseClass::header();
        return view('person.search',compact('name','fileName'));
    }

    // ajax
    public function look ($userid)
    {
        $user =  \DB::table('user')->where('userid', $userid)->first();
        return response()->json($user);
    }

    public function userview ($userid)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        list($item,$yourname,$yourimage) = BaseClass::look_youruser($userid);
        return view('person.user',compact('name','item','fileName','myid','userid','yourname','yourimage'));
    }


    // 相手ユーザーの表示
    public function user ($userid)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        list($item,$yourname,$yourimage) = BaseClass::look_youruser($userid);
        return view('person.user',compact('name','item','fileName','myid','userid','yourname','yourimage'));
    }

    // like機能
    public function like ($userid)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        $user =  \DB::table('like')->where('user_id', $userid)->first();
        $mylike =  \DB::table('like')->where('user_id', $myid)->get();
        if(isset($user)) 
        {
            \App\Models\like::where('user_id' , $userid)->delete();
        }
        else
        {
            $like = new like;
            $like->user_id = $userid;
            $like->reply_id = $myid;
            $like->save();

        }


        return response()->json($user);
    }

    // チャットページ移動

    public function chat (Request  $request)
    {
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        $chatroom = chat::find(1);
        
        return view('person.chat',compact('name','fileName','chatroom'));
    }
    



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
