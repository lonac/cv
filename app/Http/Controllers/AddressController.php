<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Address;

class AddressController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth', ['only'=>['create','update','edit']]);
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
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user =     Auth::user();
        $address=  new Address;
        $address->address = $request->input('address');
        $address->user_id = $user->id;
        $address->location = $request->input('location');
        $address->save();

        return view('phonenumbers.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $address = Auth::user()->addresses;

        return view('address.show',compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $address = Auth::user()->addresses;        
        return view('address.edit',compact('address'));
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
        $addr_id = Auth::user()->addresses->id;
        $address = Address::findOrFail($addr_id);
        $address->address = $request->input('address');
        $address->location = $request->input('location');
        $address->user_id = Auth::user()->id;
        $address->save();

        $address = Auth::user()->addresses;
        return view('address.show',compact('address'))->with('status','Your address was successful changed!');
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
