<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorporateOffice;
use App\Models\RegistredOffice;
use App\Models\HalfYearlyReport;
use App\Models\QuaterlyReport;
use App\Models\AnnualReport;
use App\Models\Finance;

class ReportController extends Controller
{
    public function index()
    {
        $corporateOffice = CorporateOffice::all();
        $registerOffice = RegistredOffice::all();

        $annual     = AnnualReport::latest()->get();
        $quater     = QuaterlyReport::latest()->get();
        $halfyearly = HalfYearlyReport::latest()->get();

        return view('frontendreport.index',compact('corporateOffice','registerOffice','annual','quater','halfyearly'));
    }
    public function finance_index()
    {
        $finance = Finance::all();
        return view('frontend_finance.index',compact('finance'));
    }
}
