<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(){
        $products=Product::paginate(6);
        return view('products',compact('products'));
    }

    public function store(Request $request){
        // $products=$request->all();
        // Product::create($products);
        return view('products-register');
    }

    public function detail(Request $request){
        $products=$request->all();
        return view('products-detail',compact('products'));
    }

}
