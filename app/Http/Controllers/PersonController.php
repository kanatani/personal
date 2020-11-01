<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Request as PostRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use App\Models\Contact;
use App\Models\test;
use App\Models\loginuser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


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

    public function kind(PostRequest  $result)
    {
        $kind =$result::all();
        $high = $kind['q1'] + $kind['q2']+ $kind['q3']+ $kind['q4']+ $kind['q5']+ $kind['q6'];
        $row = $kind['q7'] + $kind['q8']+ $kind['q9']+ $kind['q10']+ $kind['q11']+ $kind['q12'];
        $sum = $high - $row;

        $test = new test;
        $test->kind = $sum; 
        $test->save(); 
        
        $user = DB::table('test')->latest()->first();
        $users= $user->id;
        session()->put(['id' => $users]);
        $id = session()->get('id');
        return view('person.kind_result',compact('kind','sum','id'));
    }

    public function insert(PostRequest  $result)
    {
        $insert=$result::all();
        $high = $insert['q1'] + $insert['q2']+ $insert['q3']+ $insert['q4']+ $insert['q5']+ $insert['q6'];
        $row = $insert['q7'] + $insert['q8']+ $insert['q9']+ $insert['q10']+ $insert['q11']+ $insert['q12'];
        $sum = $high - $row;

        $id = session()->get('id');

        if(isset($insert['serious']))  {
            \DB::table('test')->where('id', $id) ->update([
                'conscientiousness' => $sum
            ]);
            return view('person.serious_result',compact('sum'));
        }

        if(isset($insert['openness']))  {
            \DB::table('test')->where('id', $id) ->update([
                'openness' => $sum
            ]);
            return view('person.openness_result',compact('sum'));
        }

        if(isset($insert['extraversion']))  {
            \DB::table('test')->where('id', $id) ->update([
                'extraversion' => $sum
            ]);
            return view('person.extraversion_result',compact('sum'));
        }

        if(isset($insert['neuroticism']))  {
            \DB::table('test')->where('id', $id) ->update([
                'neuroticism' => $sum
            ]);
            return view('person.neuroticism_result',compact('sum'));
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
        $loginuser = new loginuser;
        $loginuser->userid = rand(); 
        $loginuser->name = $request->login_name; 
        $loginuser->password = Hash::make($request->login_pass);
        $loginuser->email = $request->login_mail; 
        $loginuser->save(); 
        return view('person.top');
    }

    public function login (Request  $request)
    {
        

    }

    public function delete (Request  $request)
    {
        session()->flush();
        return view('person.good');
    }
}
