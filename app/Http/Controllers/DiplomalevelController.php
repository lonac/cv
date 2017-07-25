<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Diplomalevel;

class DiplomalevelController extends Controller
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
        return view('dlevel.create');

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

                $dlev = new Diplomalevel;
                $dlev->colname = $request->input('colname');
                $dlev->dyear = $request->input('dyear');
                $dlev->program = $request->input('program');
                $dlev->user_id = $user->id;

                $dlev->save();

                $dl = $user->diplomalevels;

                return view('dlevel.create',compact('dl'));
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
           $dl = $user->diplomalevels;

        return view('dlevel.show',compact('dl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dl = Diplomalevel::whereUserId(Auth::user()->id)->whereId($id)->first();
        return view('dlevel.edit',compact('dl'));
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

                $dlev = Diplomalevel::findOrFail($id);
                $dlev->colname = $request->input('colname');
                $dlev->dyear = $request->input('dyear');
                $dlev->program = $request->input('program');
                $dlev->user_id = $user->id;

                $dlev->save();

                $dl = $user->diplomalevels;

                return redirect('dlevel/show')->with('status','Diploma Details Successfully Updated');
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
