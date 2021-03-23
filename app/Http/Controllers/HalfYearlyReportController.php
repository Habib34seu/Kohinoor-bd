<?php

namespace App\Http\Controllers;

use App\Models\HalfYearlyReport;
use Illuminate\Http\Request;

class HalfYearlyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $half= HalfYearlyReport::get();
        return view('adminPage.admin_halfyear.index',['half'=>$half]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.admin_halfyear.create');
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
            'name'             =>'required',
            'thumb_img'        =>'required',
            'pdf'              =>'required',
        ]);

        $fileName = null;
        if (request()->hasFile('thumb_img')) {
            $file = request()->file('thumb_img');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./image/halfyearly_report/thumb/', $fileName);    
        }
        $pdfName = null;
        if (request()->hasFile('pdf')) {
            $file = request()->file('pdf');
            $pdfName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./image/halfyearly_report/pdf/', $pdfName);    
        }

    $halfYearlyReport=HalfYearlyReport::create([
        'name'        => $request->input('name'),
        'thumb_img'   => $fileName,
        'pdf'         => $pdfName,
    ]);
    if($halfYearlyReport){
        return redirect()->back();
       }
  
       return 'failed';  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HalfYearlyReport  $halfYearlyReport
     * @return \Illuminate\Http\Response
     */
    public function show(HalfYearlyReport $halfYearlyReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HalfYearlyReport  $halfYearlyReport
     * @return \Illuminate\Http\Response
     */
    public function edit(HalfYearlyReport $halfYearlyReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HalfYearlyReport  $halfYearlyReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HalfYearlyReport $halfYearlyReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HalfYearlyReport  $halfYearlyReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(HalfYearlyReport $halfYearlyReport)
    {
        //
    }
}
