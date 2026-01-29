<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ImageController extends Controller
{
    public function create(){
        return view('image');
    }

    public function store(Request $request){
        $product = new Product;
        $path = $request->file('image')->store('public');
        $product->image = basename($path);
        $product->save();
        return redirect('/image')->with('message','画像をアップロードしました');
    }
}
