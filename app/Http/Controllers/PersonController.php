<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as PostRequest;
use App\Models\Person;
use App\Models\Contact;
use App\Models\test;



class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Person::all();
        return view('person/index', compact('persons'));
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
        $test = new Contact;
        $test->kind = $sum; 
        $test->timestamps = false;
        $test->save(); 
        return view('person.kind_result',compact('kind','sum'));
    }
}
