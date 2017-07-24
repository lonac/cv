<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class MycvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user();
        $pers = $user->personaldetails;
        $address = Auth::user()->addresses;
        $myphonenumbers = $user->phonenumbers;
        $ol = $user->olevels;
        $al = $user->alevels;
        $cl = $user->certificatelevels;
        $dl = $user->diplomalevels;
        $dgl = $user->degreelevels;
        $ml = $user->masterslevels;
        $pl = $user->phdlevels;
        $ex = $user->experiences;
        $int = $user->interests;
        $sk = $user->skills;
        $rf = $user->referees;
        $rs = $user->researches;
        $pa = $user->affiliations;
        $aw = $user->awards;
        $jd = $user->jobdescriptions;
        $pr = $user->projects;
        $pt = $user->trainings;
        $acp = $user->presentations;
        $act = $user->activities;

        return view('mycv.show',compact('address','myphonenumbers','pers','ol','al','pt','acp','act',
            'cl','dl','dgl','ml','pl','ex','int','sk','rf','rs','pa','aw','jd','pr'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('mycv.edit');
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
        //
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
