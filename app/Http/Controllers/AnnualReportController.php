<?php

namespace App\Http\Controllers;

use App\Models\AnnualReport;
use Illuminate\Http\Request;

class AnnualReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annual = AnnualReport::get();
        return view('adminPage.admin_annual.index',['annual'=>$annual]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.admin_annual.create');
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
            $file->move('./image/annual_report/thumb/', $fileName);    
        }
        $pdfName = null;
        if (request()->hasFile('pdf')) {
            $file = request()->file('pdf');
            $pdfName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./image/annual_report/pdf/', $pdfName);    
        }

    $annual=AnnualReport::create([
        'name'        => $request->input('name'),
        'thumb_img'   => $fileName,
        'pdf'         => $pdfName,
    ]);
    if($annual){
        return redirect()->back();
       }
  
       return 'failed';  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnnualReport  $annualReport
     * @return \Illuminate\Http\Response
     */
    public function show(AnnualReport $annualReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnnualReport  $annualReport
     * @return \Illuminate\Http\Response
     */
    public function edit(AnnualReport $annualReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnnualReport  $annualReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnualReport $annualReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnnualReport  $annualReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnnualReport $annualReport)
    {
        //
    }
}
