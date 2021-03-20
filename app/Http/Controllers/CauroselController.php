<?php

namespace App\Http\Controllers;

use App\Models\Caurosel;
use Illuminate\Http\Request;

class CauroselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caurosel = Caurosel::get();
        return view('adminPage.carosuel.index',['caurosel'=>$caurosel]);
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
                    'image' =>'required',
                ]);
                $fileName = null;
                if (request()->hasFile('image')) {
                    $file = request()->file('image');
                    $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                    $file->move('./uploades/caurosel/', $fileName);    
                }
                $caurosel=Caurosel::create([ 
                    'image' => $fileName,
                ]);
            return response()->json($caurosel,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caurosel  $caurosel
     * @return \Illuminate\Http\Response
     */
    public function show(Caurosel $caurosel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caurosel  $caurosel
     * @return \Illuminate\Http\Response
     */
    public function edit(Caurosel $caurosel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caurosel  $caurosel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caurosel $caurosel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caurosel  $caurosel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caurosel $caurosel)
    {
        //
    }
}
