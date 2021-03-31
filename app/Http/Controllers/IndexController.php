<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CorporateOffice;
use App\Models\RegistredOffice;
use App\Models\Caurosel;
class IndexController extends Controller
{
    public function index(){

        $brand = Brand :: get();
        $corporateOffice = CorporateOffice::all();
        $registerOffice = RegistredOffice::all();
        $caurosel = Caurosel::all();
        return view('frontend.index',compact('brand','registerOffice','corporateOffice','caurosel'));
    }
}
