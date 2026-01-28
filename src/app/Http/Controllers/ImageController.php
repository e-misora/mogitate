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
        // name属性が'thumbnail'のinputタグをファイル形式に、画像をpublic/avatarに保存
        $path = $request->file('image')->store('public');

        // 上記処理にて保存した画像に名前を付け、userテーブルのthumbnailカラムに、格納
        $product->image = basename($path);

        $product->save();
        return redirect('/image')->with('message','画像をアップロードできました');

    }

}
