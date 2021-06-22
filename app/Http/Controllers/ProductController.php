<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "xin chào đến trang index";
    }

 
 
   // show
    public function show()
    {
        $Products = Product::all();
      
        return view('product.index',compact('Products'));
    }

    // detail 
    public function detail($id){
        $detail_product = Product::find($id);
        return view('product.detail',compact('detail_product'));
    }

    
}
