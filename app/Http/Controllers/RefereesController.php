<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Referees;

class RefereesController extends Controller
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
       return view('referees.create');
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

        $rf = new Referees;
        $rf->refaname = $request->input('refaname');
        $rf->title = $request->input('title');
        $rf->address = $request->input('address');
        $rf->user_id = $user->id;

        $rf->save();

        $rf = $user->referees;

        return view('referees.create',compact('rf'));
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
           $rf = $user->referees;
           
        return view('referees.show',compact('rf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rf = Referees::whereUserId(Auth::user()->id)->whereId($id)->first();
        return view('referees.edit',compact('rf'));
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

        $rf = Referees::findOrFail($id);
        $rf->refaname = $request->input('refaname');
        $rf->title = $request->input('title');
        $rf->address = $request->input('address');
        $rf->user_id = $user->id;

        $rf->save();

        $rf = $user->referees;

        return redirect('referees/show')->with('status','Refeeres successfully Updated');
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
