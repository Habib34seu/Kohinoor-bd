<?php

namespace App\Http\Controllers;

use App\Models\BordOfDirectors;
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
        return view('BordOfDirector.index');
    }
    
}
