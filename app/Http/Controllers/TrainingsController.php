<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Trainings;

class TrainingsController extends Controller
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
     return view('trainings.create');

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

        $ptrains = new Trainings;
        $ptrains->date = $request->input('date');
        $ptrains->description = $request->input('description');
        $ptrains->user_id = $user->id;

        $ptrains->save();

        $pt = $user->trainings;

        return view('trainings.create',compact('pt'));
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
           $pt = $user->trainings;
           
        return view('trainings.show',compact('pt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pt = Trainings::whereUserId(Auth::user()->id)->whereId($id)->first();
          return view('trainings.edit',compact('pt'));
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

        $ptrains = Trainings::findOrFail($id);
        $ptrains->date = $request->input('date');
        $ptrains->description = $request->input('description');
        $ptrains->user_id = $user->id;

        $ptrains->save();

        $pt = $user->trainings;

        return redirect('trainings/show')->with('status','Trainings successfully Updated');
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
