<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Activities;

class OtherActivitiesController extends Controller
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
      return view('activities.create');
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

        $actvty = new Activities;
        $actvty->description = $request->input('description');
        $actvty->user_id = $user->id;

        $actvty->save();

        $act = $user->activities;

        return view('activities.create',compact('act'));
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
           $act = $user->activities;
           
        return view('activities.show',compact('act'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $act = Activities::whereUserId(Auth::user()->id)->whereId($id)->first();
        return view('activities.edit',compact('act'));
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
        $actvty = Activities::findOrFail($id);
        $actvty->description = $request->input('description');
        $actvty->user_id = $user->id;

        $actvty->save();

        $act = $user->activities;

        return redirect('activities/show')->with('status','Activities successfully Updated');
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
