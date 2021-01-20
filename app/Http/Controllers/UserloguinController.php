<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;

// model
use App\Models\loginuser;
use App\Models\test;

// hash
use Illuminate\Support\Facades\Hash;
// auth
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use app\library\BaseClass;

class UserloguinController extends Controller
{
    // ログイン
    public function  login(Request $request)
    {
            $email = $request->login_mail;  
            $password = $request->login_pass;
            if(isset($request->login_name))
            {
                if(empty($email) && empty($password)){
                    
                    return redirect('person/loguin')->with('flash_message', '＊メーアドかパスワード欄に空欄があります。');
                }
                else if(!session()->exists('id'))
                {
                    return redirect('person/loguin')->with('test_message', '＊テストを受けてください。');
                }
                $id = session()->get('id');
                $loginuser = new loginuser;
                $loginuser->userid = rand(); 
                $loginuser->sessionid = $id;
                $loginuser->name = $request->login_name; 
                $loginuser->password = Hash::make($request->login_pass);
                $loginuser->email = $request->login_mail; 
                $loginuser->save(); 
            }
            $email = $request->login_mail;  
            $password = $request->login_pass;
            // アカウントチェック
            if(Auth::attempt(['password' => $password, 'email' => $email])) {
                $user =  \DB::table('user')->where('email', $email)->first();
                $users = session()->put('id', $user->sessionid);
                $id = session()->get('id');
                if(isset($request->login_name))
                {
                    return view('person.top');
                }
                else
                {
                $fileName= $user->image;
                $item = test::find($id);
                $name= $user->name;
                $userid = $user->userid;
                return view('person.mypage',compact('name','item','id','fileName','userid'));
                }
            }
            else 
            {
                return redirect('person/loguin')->with('no_message', '＊パスワードかメーアドをもう一度ご確認お願いします。');
            }
    }

     // ログアウト
     public function logout (Request $request)
     {
         session()->flush();
         \Auth::logout();
         return redirect('person');
     }

}
