<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;
// model
use App\Models\test;
use App\Models\loginuser;
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
    //トップページ
    public function index()
    {
        session()->flush();
        return view('person/index');
    }

    // 自分のページ
    public function  mypage(Request $request)
    {
        $id = session()->get('id');
        $item = test::find($id);
        list($name,$fileName,$myid) = BaseClass::look_myuser();
        $userid = $myid;
        return view('person.mypage',compact('name','item','userid','fileName'));
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
