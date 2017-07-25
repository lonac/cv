<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Research;

class ResearchesController extends Controller
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
    
        return view('research.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $user = Auth::user();

        $rs = new Research;
        $rs->name = $request->input('name');
        $rs->description = $request->input('description');
        $rs->user_id = $user->id;

        $rs->save();

        $rs = $user->researches;

        return view('research.create',compact('rs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();

           $rs = $user->researches;

           
        return view('research.show',compact('rs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rs = Research::whereUserId(Auth::user()->id)->whereId($id)->first();
        return view('research.edit',compact('rs'));
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
        $user = Auth::user();

        $rs = Research::findOrFail($id);
        $rs->name = $request->input('name');
        $rs->description = $request->input('description');
        $rs->user_id = $user->id;

        $rs->save();

        $rs = $user->researches;

        return redirect('research/show')->with('status','Researches successfully Updated');
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
}
