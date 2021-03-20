<?php

namespace App\Http\Controllers;

use App\Models\BordOfDirectors;
use App\Models\CorporateOffice;
use App\Models\RegistredOffice;
use Illuminate\Http\Request;

class BordOfDirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corporateOffice = CorporateOffice::all();
        $registerOffice = RegistredOffice::all();
        return view('frontend.bordOfDirector',compact('corporateOffice','registerOffice'));
    }
    
}
