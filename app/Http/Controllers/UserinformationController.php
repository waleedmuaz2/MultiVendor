<?php

namespace App\Http\Controllers;

use App\userinformation;
use Illuminate\Http\Request;

class UserinformationController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function StoreVendorInfo(Request $request)
    {
        $post=new Userinformation;
        $post->WorkAs=$request->workas;
        $post->ComName=$request->ComName;
        $post->MainCategory=$request->MainCategory;
        $post->Phone=$request->Phone;
        $post->CompanyAddress=$request->CompanyAddress;
        $post->Email=$request->Email;
        $post->CoURL=$request->CoURL;
        $post->Description=$request->Description;
        $post->save();
        return redirect()->to('/'); 
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\userinformation  $userinformation
     * @return \Illuminate\Http\Response
     */
    public function show(userinformation $userinformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userinformation  $userinformation
     * @return \Illuminate\Http\Response
     */
    public function edit(userinformation $userinformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\userinformation  $userinformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userinformation $userinformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\userinformation  $userinformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(userinformation $userinformation)
    {
        //
    }
}
