<?php

namespace App\Http\Controllers;

use App\Models\QuaterlyReport;
use Illuminate\Http\Request;

class QuaterlyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quater = QuaterlyReport::get();
        return view('adminPage.admin_quater.index',['quater'=>$quater]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.admin_quater.create');
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
            $file->move('./image/quaterly_report/thumb/', $fileName);    
        }
        $pdfName = null;
        if (request()->hasFile('pdf')) {
            $file = request()->file('pdf');
            $pdfName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./image/quaterly_report/pdf/', $pdfName);    
        }

    $quaterlyReport=QuaterlyReport::create([
        'name'        => $request->input('name'),
        'thumb_img'   => $fileName,
        'pdf'         => $pdfName,
    ]);
    if($quaterlyReport){
        return redirect()->back();
       }
  
       return 'failed'; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuaterlyReport  $quaterlyReport
     * @return \Illuminate\Http\Response
     */
    public function show(QuaterlyReport $quaterlyReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuaterlyReport  $quaterlyReport
     * @return \Illuminate\Http\Response
     */
    public function edit(QuaterlyReport $quaterlyReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuaterlyReport  $quaterlyReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuaterlyReport $quaterlyReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuaterlyReport  $quaterlyReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuaterlyReport $quaterlyReport)
    {
        //
    }
}
