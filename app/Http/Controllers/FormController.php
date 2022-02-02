<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request->all());
        $request->validate([

            'fname' => 'required|min:3|max:35',
            'lname' =>'required|min:3|max:35',
            'uname' =>'required|unique:forms',
            'zip'=> 'required|max:6',
            'email'=>'required|email|unique:forms',
            'mobile'=>'required|max:10',

        ]);

        $res=new Form;
        $res->fname=$request->input('fname');


        $res->lname=$request->input('lname');


        $res->uname=$request->input('uname');

        $res->zip=$request->input('zip');

        $res->email=$request->input('email');

        $res->mobile=$request->input('mobile');

            $res->state=$request->input('state');

            $res->gender=$request->input('gender');


        $res->check=implode("",$request->check);

        // $res->radioptions= Input::has('radioptions')== 'true' ? 1 : 0;

        $res->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
