<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Olevel;

class OlevelController extends Controller
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
        return view('olevel.create');
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

        $olev = new Olevel;
        $olev->olevname = $request->input('olevname');
        $olev->oyear = $request->input('oyear');
        $olev->remark = $request->input('remark');
        $olev->user_id = $user->id;

        $olev->save();

        $ol = $user->olevels;

        return view('clevel.create',compact('ol'));
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
        $ol = $user->olevels;

        return view('olevel.show',compact('ol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ol = Olevel::whereUserId(Auth::user()->id)->whereId($id)->first();
        return view('olevel.edit',compact('ol'));
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

        $olev = Olevel::findOrFail($id);
        $olev->olevname = $request->input('olevname');
        $olev->oyear = $request->input('oyear');
        $olev->remark = $request->input('remark');
        $olev->user_id = $user->id;

        $olev->save();

        $ol = $user->olevels;

        return redirect('olevel/show')->with('status','Ordinary level details were successful Updated');
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
