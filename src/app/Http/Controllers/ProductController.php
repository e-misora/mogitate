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

    public function search(Request $request){
        return view('products-search');
    }



    public function create(){
        return view('products-register',compact('products'));
    }

    public function store(Request $request){
        $path = $request->file('image')->store('public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $path,
            'description' => $request->description
        ]);

        return redirect('/products');
    }

    public function edit(Request $request){
        $products=$request->all();
        return view('products-detail',compact('products'));
    }

    public function update(Request $request){
        $product = $request->only(['name']);
        Product::find($request->id)->update($product);
        return redirect('/products');
    }
}
