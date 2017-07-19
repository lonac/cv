<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Session;

use App\Personaldetails;

class PersonalDetailsController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth', ['only'=> ['create','edit','update']]);
    }
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
        return view('personaldetails.create');
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

        $pers = new Personaldetails();

        $pers->firstname = $request->input('firstname');
        $pers->middlename = $request->input('middlename');
        $pers->lastname = $request->input('lastname');
        $pers->user_id = $user->id;
        $pers->gender =$request->input('gender');
        $pers->nationality = $request->input('nationality');
        $pers->birthdate = $request->input('birthdate');

        $pers->save();

        return view('contacts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $pers = Auth::user()->personaldetails;
        return view('personaldetails.show',compact('pers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
       $pers = Auth::user()->personaldetails;

      if ($pers!==null) {
          return view('personaldetails.edit');
      } else {
          return view('personaldetails.create');
      }
      
       
       
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $pers_dets = Auth::user()->personaldetails->id;
        $per = Personaldetails::whereUserId($user->id)->whereId($pers_dets)->first();

        $per = new Personaldetails();

        $per->firstname = $request->input('firstname');
        $per->middlename = $request->input('middlename');
        $per->lastname = $request->input('lastname');
        $per->user_id = $user->id;
        $per->gender =$request->input('gender');
        $per->nationality = $request->input('nationality');
        $per->birthdate = $request->input('birthdate');

        $per->save();
         $pers = $user->personaldetails;

         Session::flash('flash_message', 'Task successfully added!');

        return view('personaldetails.show',compact('pers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $pers = Personaldetails::whereUserId(Auth::user()->id)->first();
        $pers->delete();

        return redirect('personaldetails.show');
    }
}
