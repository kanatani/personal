<?php
namespace app\library;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseClass {
    public static function header() {
        $id = session()->get('id');
        $loginuser = \DB::table('user')->where('sessionid', $id)->first();
        $name = $loginuser->name;
        $fileName = $loginuser->image;
        return [$name,$fileName];
    }
}

?>