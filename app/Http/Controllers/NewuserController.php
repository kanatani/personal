<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
		$fileNames = Storage::disk('s3')->putFile('uploads', $file, 'public');
		$fileName = Storage::disk('s3')->url($fileNames);
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
