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

    // public function kind(PostRequest  $result)
    // {
    //     $kind =$result::all();
    //     $high = $kind['q1'] + $kind['q2']+ $kind['q3']+ $kind['q4']+ $kind['q5']+ $kind['q6'];
    //     $row = $kind['q7'] + $kind['q8']+ $kind['q9']+ $kind['q10']+ $kind['q11']+ $kind['q12'];
    //     $sum = $high - $row;

    //     $test = new test;
    //     $test->kind = $sum; 
    //     $test->save(); 
        
    //     $user = DB::table('test')->latest()->first();
    //     $users= $user->id;
    //     session()->put(['id' => $users]);
    //     $id = session()->get('id');
    //     return view('person.kind_result',compact('kind','sum','id'));
    // }

   
    
    
    public function insert(PostRequest  $result)
    {
        $insert=$result::all();
        if(Auth::check()) {
            $id = session()->get('id');
            $user =  \DB::table('test')->where('id', $id)->first();
            switch(true) {
                case isset($insert['kind']):
                    $sum = $user->kind;
                    return view('person.kind_result',compact('sum'));
                    break;

                case isset($insert['serious']):
                    $sum = $user->conscientiousness;
                    return view('person.serious_result',compact('sum'));
                    break;

                case isset($insert['openness']):
                    $sum = $user->openness;
                    return view('person.openness_result',compact('sum'));
                    break;

                case isset($insert['extraversion']):
                    $sum = $user->extraversion;
                    return view('person.extraversion_result',compact('sum'));
                    break;

                case isset($insert['neuroticism']):
                    $sum = $user->neuroticism;
                    return view('person.neuroticism_result',compact('sum'));
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
        return view('person.top' , compact('userid'));
    }

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

    public function  logout(Request $request)
    {
        Auth::logout();
        session()->flush();
        return view('person');
    }

    public function delete (Request  $request)
    {
        session()->flush();
        return view('person.good');
    }

    public function search (Request  $request)
    {
        list($name,$fileName) = BaseClass::header();
        return view('person.search',compact('name','fileName'));
    }

    public function look ($userid)
    {
        $user =  \DB::table('user')->where('userid', $userid)->first();
        return response()->json($user);
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
