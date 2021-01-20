<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;
// model
use App\Models\Contact;

class ContentController extends Controller
{

    // お問い合わせ確認
    public function content(PostRequest  $result)
    {
        $data1 = $result::all();
        return view('person.check',compact('data1'));
    }

    // 保存
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name; 
        $contact->mail = $request->mail; 
        $contact->content = $request->content; 
        $contact->save(); 
        return view('/person/content_input');
    }
}
