<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCat;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index_detail()
    // {
    //     $product = Product :: get();
    //     return view('adminPage.product.product_detail');
    // }
    public function index()
    {
        $product = Product :: get();
        return view('adminPage.product.index',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCat = ProductCat :: get();
        $brand = Brand :: get();
        return view('adminPage.product.create',compact('productCat','brand'));
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
            'name'                      =>'required',
            'img'                       =>'required',
            'desc'                      =>'required',
            'prod_spe_desc'             =>'required',
            'prod_eff_desc'             =>'required',
            'pcat_id'                   =>'required',
            'brand_id'                  =>'required',
        ]);

        $fileName = null;
        if (request()->hasFile('img')) {
            $file = request()->file('img');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./image/product/', $fileName);    
        }

    $product=Product::create([
        'name'                 => $request->input('name'),
        'img'                  => $fileName,
        'desc'                 => $request->input('desc'),
        'prod_spe_desc'        => $request->input('prod_spe_desc'),
        'prod_eff_desc'        => $request->input('prod_eff_desc'),
        'pcat_id'              => $request->input('pcat_id'),
        'brand_id'             => $request->input('brand_id'),
    ]);
    if($product){
        return redirect()->back();
       }
  
       return 'failed'; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::where('id',$id)->first();
        return view("adminPage.product.product_detail",compact('product')); 
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
