<?php

namespace App\Http\Controllers;

use App\Models\RegistredOffice;
use Illuminate\Http\Request;

class RegistredOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $registredOffice = RegistredOffice::get();
        return view('adminPage.registerdOffice.index',['registredOffice'=>$registredOffice]);
    }

    public function create()
    {
        return view('adminPage.registerdOffice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'fax' =>'required',
            'web' =>'required',
        ]);
        $registredOffice=RegistredOffice::create([ 
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'web' => $request->web,

        ]);
        if($registredOffice){
            return redirect()->back();
           }
      
           return 'failed'; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistredOffice  $registredOffice
     * @return \Illuminate\Http\Response
     */
    public function show(RegistredOffice $registredOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistredOffice  $registredOffice
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistredOffice $registredOffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistredOffice  $registredOffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistredOffice $registredOffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistredOffice  $registredOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistredOffice $registredOffice)
    {
        //
    }
}
