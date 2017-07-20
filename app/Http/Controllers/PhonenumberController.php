<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Phonenumber;

class PhonenumberController extends Controller
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
        return view('phonenumbers/create');
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

        $phone = new Phonenumber;
        $phone->phonenumber = $request->input('phonenumber');
        $phone->user_id = $user->id;

        $phone->save();

         return redirect('phonenumbers/create')->with('status','Phonenumber successfull added');

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
        $myphonenumbers = $user->phonenumbers;

      return view('phonenumbers.show',compact('myphonenumbers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phonenumber = Phonenumber::whereUserId(Auth::user()->id)->whereId($id)->first();
        
        return view('phonenumbers.edit',compact('phonenumber'));

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

        $phone = Phonenumber::findOrFail($id);
        $phone->phonenumber = $request->input('phonenumber');
        $phone->user_id = $user->id;

        $phone->save();

         return redirect('phonenumbers/show')
         ->with('status','Phonenumber was successfull Changed');
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
