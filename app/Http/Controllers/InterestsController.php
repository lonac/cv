<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Interests;

class InterestsController extends Controller
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
            return view('interests.create');

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

        $intr = new Interests;
        $intr->interest = $request->input('interest');
        $intr->user_id = $user->id;

        $intr->save();

        $int = $user->interests;

        return view('interests.create',compact('int'));
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
           $int = $user->interests;
           
        return view('interests.show',compact('int'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $int = Interests::whereUserId(Auth::user()->id)->whereId($id)->first();
        return view('interests.edit',compact('int'));
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

        $intr =Interests::findOrFail($id);
        $intr->interest = $request->input('interest');
        $intr->user_id = $user->id;

        $intr->save();

        $int = $user->interests;

        return redirect('interests/show')->with('status','Interests successfully updated');
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
