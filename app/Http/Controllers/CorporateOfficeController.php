<?php

namespace App\Http\Controllers;

use App\Models\CorporateOffice;
use Illuminate\Http\Request;

class CorporateOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $corporate = CorporateOffice :: get();
        return view('adminPage.corporateOffice.index',['corporate'=>$corporate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.corporateOffice.create');  
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
        $corporateOffice=CorporateOffice::create([ 
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'web' => $request->web

        ]);
        if($corporateOffice){
            return redirect()->back();
           }
      
           return 'failed'; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorporateOffice  $corporateOffice
     * @return \Illuminate\Http\Response
     */
    public function show(CorporateOffice $corporateOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorporateOffice  $corporateOffice
     * @return \Illuminate\Http\Response
     */
    public function edit(CorporateOffice $corporateOffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CorporateOffice  $corporateOffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CorporateOffice $corporateOffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorporateOffice  $corporateOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorporateOffice $corporateOffice)
    {
        //
    }
}
