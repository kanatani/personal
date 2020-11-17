<?php
namespace app\library;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\test;

class BaseClass {
    public static function header() {
        $id = session()->get('id');
        $loginuser = \DB::table('user')->where('sessionid', $id)->first();
        $name = $loginuser->name;
        $fileName = $loginuser->image;
        return [$name,$fileName];
    }

    public static function look_myuser() {
        $id = session()->get('id');
        $loginuser = \DB::table('user')->where('sessionid', $id)->first();
        $name = $loginuser->name;
        $fileName = $loginuser->image;
        $myid = $loginuser->userid;
        return [$name,$fileName,$myid];
    }
    
    public static function look_youruser($userid) {
        $loginuser = \DB::table('user')->where('userid', $userid)->first();
        $yourid = $loginuser->sessionid;
        $yourname = $loginuser->name;
        $yourimage = $loginuser->image;
        $item = test::find($yourid);
        return [$item,$yourname,$yourimage];
    }


}

?>