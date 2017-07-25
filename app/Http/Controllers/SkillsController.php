<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Skills;

class SkillsController extends Controller
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
      return view('skills.create');

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
        $sk = new Skills;
        $sk->skillname = $request->input('skillname');
        $sk->description = $request->input('description');
        $sk->user_id = $user->id;

        $sk->save();

        $sk = $user->skills;

        return view('skills.create',compact('sk'));
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
           $sk = $user->skills;
           
        return view('skills.show',compact('sk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sk = Skills::whereUserId(Auth::user()->id)->whereId($id)->first();
        return view('skills.edit',compact('sk'));
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
        $sk = Skills::findOrFail($id);
        $sk->skillname = $request->input('skillname');
        $sk->description = $request->input('description');
        $sk->user_id = $user->id;

        $sk->save();

        $sk = $user->skills;

        return redirect('skills/show')->with('status','Skills and Talent Successfully Updated');
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
