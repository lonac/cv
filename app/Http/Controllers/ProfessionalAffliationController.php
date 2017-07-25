<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Affiliations;

class ProfessionalAffliationController extends Controller
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
         return view('professionalaffiliation.create');

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

        $pa = new Affiliations;
        $pa->name = $request->input('name');
        $pa->user_id = $user->id;

        $pa->save();

        $pa = $user->affiliations;

        return view('professionalaffiliation.create',compact('pa'));
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

           $pa = $user->affiliations;

           
        return view('professionalaffiliation.show',compact('pa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pa = Affiliations::whereUserId(Auth::user()->id)->whereId($id)->first();
        return view('professionalaffiliation.edit',compact('pa'));
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

        $pa = Affiliations::findOrFail($id);
        $pa->name = $request->input('name');
        $pa->user_id = $user->id;

        $pa->save();

        $pa = $user->affiliations;

        return redirect('professionalaffiliation/show')
        ->with('status','Professional affiliation successfully updated');
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
