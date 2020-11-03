<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\loginuser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function  login(Request $request)
    {
        $email = $request->login_mail;  
        $password = $request->login_pass;
        if(Auth::attempt(['password' => $password, 'email' => $email])) {
            return view('person.mypage');
            echo 'uhh';
        }
        else {
            return view('person.loguin');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
