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

class TestController extends Controller
{
    public function insert(PostRequest  $result)
    {
        $insert=$result::all();
        // すでにログインしているユーザー
        if(Auth::check()) {
            // 自分か他のユーザーかを見分ける
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
                // 協調性テスト
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
                //勤勉性テスト
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
                //開放性テスト
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
                //外向性テスト
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
                // 神経症的傾向テスト
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
            // ログインしていないユーザー
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

    // テスト結果
    public function result (PostRequest  $request)
    {
        $user = DB::table('test')->latest()->first();
        $users= $user->id;
        session()->put(['id' => $users]);
        $id = session()->get('id');
        $item = test::find($id);
        return view('person.sum_result',compact('item'));
    }

}
