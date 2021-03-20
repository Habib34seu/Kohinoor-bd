<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorporateOffice;
use App\Models\RegistredOffice;

class ReportController extends Controller
{
    public function index()
    {
        $corporateOffice = CorporateOffice::all();
        $registerOffice = RegistredOffice::all();
        return view('frontendreport.index',compact('corporateOffice','registerOffice'));
    }
}
