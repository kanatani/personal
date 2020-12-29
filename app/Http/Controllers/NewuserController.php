<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;
// model
use App\Models\test;
use App\Models\loginuser;

class NewuserController extends Controller
{
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
        if (empty($file))
        {
            return redirect('person/top')->with('image_message', '＊画像が選択されていません。');
        }
        else
        {
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
    }
}
